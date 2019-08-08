<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankAgenciesController extends Controller
{
    
    public function index(){

    	$bankagencies = \App\BankAgency::get();

    	return view('archive.bankagencies.index', ['bankagencies' => $bankagencies]);
    }

    public function new(){
    	return view('archive.bankagencies.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['bankAgency_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\BankAgency::create($req)){
    		return redirect('bankagencies')->with('success',"Saved!");
    	} else {
    		return redirect('bankagencies')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\BankAgency::where('bankAgency_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.bankagencies.edit', $data);
    	} else {
    		return redirect('bankagencies')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\BankAgency::where('bankAgency_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['bankAgency_'.$key] = $value;
	    		} else {
	    			$req['bankAgency_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('bankagencies')->with('success',"Saved!");
	    	} else {
	    		return redirect('bankagencies')->with('error',"Could not saved!");
	    	}
    	}
    }

    public function getBanks(){
    	$banks = \App\Bank::get();
        return datatables()->of($banks)->toJson();
    }
}
