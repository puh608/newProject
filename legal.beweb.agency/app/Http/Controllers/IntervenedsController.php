<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntervenedsController extends Controller
{
    
    public function index(){

    	$interveneds = \App\Intervened::get();

    	return view('archive.interveneds.index', ['interveneds' => $interveneds]);
    }

    public function new(){
    	return view('archive.interveneds.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['intervened_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Intervened::create($req)){
    		return redirect('interveneds')->with('success',"Saved!");
    	} else {
    		return redirect('interveneds')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Intervened::where('intervened_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.interveneds.edit', $data);
    	} else {
    		return redirect('interveneds')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Intervened::where('intervened_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['intervened_'.$key] = $value;
	    		} else {
	    			$req['intervened_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('interveneds')->with('success',"Saved!");
	    	} else {
	    		return redirect('interveneds')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
