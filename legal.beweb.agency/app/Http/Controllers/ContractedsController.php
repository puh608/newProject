<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractedsController extends Controller
{
    
    public function index(){

    	$contracteds = \App\Contracted::get();

    	return view('archive.contracteds.index', ['contracteds' => $contracteds]);
    }

    public function new(){
    	return view('archive.contracteds.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['contracted_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Contracted::create($req)){
    		return redirect('contracteds')->with('success',"Saved!");
    	} else {
    		return redirect('contracteds')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Contracted::where('contracted_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.contracteds.edit', $data);
    	} else {
    		return redirect('contracteds')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Contracted::where('contracted_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['contracted_'.$key] = $value;
	    		} else {
	    			$req['contracted_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('contracteds')->with('success',"Saved!");
	    	} else {
	    		return redirect('contracteds')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
