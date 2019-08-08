<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceAgenciesController extends Controller
{
    
    public function index(){

    	$insuranceagencies = \App\InsuranceAgency::get();

    	return view('archive.insuranceagencies.index', ['insuranceagencies' => $insuranceagencies]);
    }

    public function new(){
    	return view('archive.insuranceagencies.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['insuranceAgency_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\InsuranceAgency::create($req)){
    		return redirect('insuranceagencies')->with('success',"Saved!");
    	} else {
    		return redirect('insuranceagencies')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\InsuranceAgency::where('insuranceAgency_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.insuranceagencies.edit', $data);
    	} else {
    		return redirect('insuranceagencies')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\InsuranceAgency::where('insuranceAgency_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['insuranceAgency_'.$key] = $value;
	    		} else {
	    			$req['insuranceAgency_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('insuranceagencies')->with('success',"Saved!");
	    	} else {
	    		return redirect('insuranceagencies')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
