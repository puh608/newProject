<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsurancesController extends Controller
{
    
    public function index(){

    	$insurances = \App\Insurance::get();

    	return view('archive.insurances.index', ['insurances' => $insurances]);
    }

    public function new(){
    	return view('archive.insurances.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['insurance_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Insurance::create($req)){
    		return redirect('insurances')->with('success',"Saved!");
    	} else {
    		return redirect('insurances')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Insurance::where('insurance_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.insurances.edit', $data);
    	} else {
    		return redirect('insurances')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Insurance::where('insurance_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['insurance_'.$key] = $value;
	    		} else {
	    			$req['insurance_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('insurances')->with('success',"Saved!");
	    	} else {
	    		return redirect('insurances')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
