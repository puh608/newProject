<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialistsController extends Controller
{
    
    public function index(){

    	$specialists = \App\Specialist::get();

    	return view('archive.specialists.index', ['specialists' => $specialists]);
    }

    public function new(){

    	$data['CONTACT_QUALIFICATIONS_LIST'] = config('global.CONTACT_QUALIFICATIONS_LIST');
    	$data['SPECIALIST_TYPES_LIST'] = \App\ExternalValue::where('externalValue_typeName', 'SPECIALIST_TYPES_LIST')->get();

    	return view('archive.specialists.new', $data);
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['specialist_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Specialist::create($req)){
    		return redirect('specialists')->with('success',"Saved!");
    	} else {
    		return redirect('specialists')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Specialist::where('specialist_ID', $id)->first()){

    		$data['rec'] = $rec;
    		$data['CONTACT_QUALIFICATIONS_LIST'] = config('global.CONTACT_QUALIFICATIONS_LIST');
    		$data['SPECIALIST_TYPES_LIST'] = \App\ExternalValue::where('externalValue_typeName', 'SPECIALIST_TYPES_LIST')->get();

    		return view('archive.specialists.edit', $data);
    	} else {
    		return redirect('specialists')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Specialist::where('specialist_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['specialist_'.$key] = $value;
	    		} else {
	    			$req['specialist_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('specialists')->with('success',"Saved!");
	    	} else {
	    		return redirect('specialists')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
