<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TribunalsController extends Controller
{
    
    public function index(){

    	$tribunals = \App\Tribunal::get();

    	return view('archive.tribunals.index', ['tribunals' => $tribunals]);
    }

    public function new(){
    	return view('archive.tribunals.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['tribunal_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Tribunal::create($req)){
    		return redirect('tribunals')->with('success',"Saved!");
    	} else {
    		return redirect('tribunals')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Tribunal::where('tribunal_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('archive.tribunals.edit', $data);
    	} else {
    		return redirect('tribunals')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Tribunal::where('tribunal_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['tribunal_'.$key] = $value;
	    		} else {
	    			$req['tribunal_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('tribunals')->with('success',"Saved!");
	    	} else {
	    		return redirect('tribunals')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
