<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsurancePointsController extends Controller
{
    
    public function index(){

    	$insurancepoints = \App\InsurancePoint::with('insurance')->get();

    	return view('archive.insurancepoints.index', ['insurancepoints' => $insurancepoints]);
    }

    public function new(){
    	return view('archive.insurancepoints.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['insurancePoint_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\InsurancePoint::create($req)){
    		return redirect('insurance-points')->with('success',"Saved!");
    	} else {
    		return redirect('insurance-points')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\InsurancePoint::with('insurance')->where('insurancePoint_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.insurancepoints.edit', $data);
    	} else {
    		return redirect('insurance-points')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\InsurancePoint::where('insurancePoint_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['insurancePoint_'.$key] = $value;
	    		} else {
	    			$req['insurancePoint_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('insurance-points')->with('success',"Saved!");
	    	} else {
	    		return redirect('insurance-points')->with('error',"Could not saved!");
	    	}
    	}
    }

    public function getInsurances(){
    	$insurances = \App\Insurance::get();
        return datatables()->of($insurances)->toJson();
    }
}
