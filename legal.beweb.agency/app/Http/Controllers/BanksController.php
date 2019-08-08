<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanksController extends Controller
{
    
    public function index(){

    	$banks = \App\Bank::get();

    	return view('archive.banks.index', ['banks' => $banks]);
    }

    public function new(){
    	return view('archive.banks.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['bank_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Bank::create($req)){
    		return redirect('banks')->with('success',"Saved!");
    	} else {
    		return redirect('banks')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Bank::where('bank_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.banks.edit', $data);
    	} else {
    		return redirect('banks')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Bank::where('bank_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['bank_'.$key] = $value;
	    		} else {
	    			$req['bank_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('banks')->with('success',"Saved!");
	    	} else {
	    		return redirect('banks')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
