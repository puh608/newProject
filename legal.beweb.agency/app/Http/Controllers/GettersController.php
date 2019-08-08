<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GettersController extends Controller
{
    
    public function index(){

    	$getters = \App\Getter::get();

    	return view('archive.getters.index', ['getters' => $getters]);
    }

    public function new(){
    	$data['customer_qualifications_list'] = config('global.CUSTOMER_QUALIFICATIONS_LIST');

    	return view('archive.getters.new', $data);
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['getter_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Getter::create($req)){
    		return redirect('getters')->with('success',"Saved!");
    	} else {
    		return redirect('getters')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Getter::where('getter_ID', $id)->first()){

    		$data['rec'] = $rec;
    		$data['customer_qualifications_list'] = config('global.CUSTOMER_QUALIFICATIONS_LIST');

    		return view('archive.getters.edit', $data);
    	} else {
    		return redirect('getters')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Getter::where('getter_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['getter_'.$key] = $value;
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('getters')->with('success',"Saved!");
	    	} else {
	    		return redirect('getters')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
