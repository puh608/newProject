<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    
    public function index(){

    	$useragencyid = session()->get('useragencyid');

    	$customers = \App\Customer::where('sys_ownerID', $useragencyid)->get();

    	return view('archive.customers.index', ['customers' => $customers]);
    }

    public function new(){
    	$data['customer_qualifications_list'] = config('global.CUSTOMER_QUALIFICATIONS_LIST');
    	$data['practice_person_id_types_list'] = config('global.PRACTICE_PERSON_ID_TYPES_LIST');
    	$data['customer_got_by_list'] = config('global.CUSTOMER_GOT_BY_LIST');

    	return view('archive.customers.new', $data);
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['customer_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Customer::create($req)){
    		return redirect('customers')->with('success',"Saved!");
    	} else {
    		return redirect('customers')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Customer::where('customer_ID', $id)->first()){

    		$data['rec'] = $rec;
    		$data['customer_qualifications_list'] = config('global.CUSTOMER_QUALIFICATIONS_LIST');
	    	$data['practice_person_id_types_list'] = config('global.PRACTICE_PERSON_ID_TYPES_LIST');
	    	$data['customer_got_by_list'] = config('global.CUSTOMER_GOT_BY_LIST');

    		return view('archive.customers.edit', $data);
    	} else {
    		return redirect('customers')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Customer::where('customer_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['customer_'.$key] = $value;
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('customers')->with('success',"Saved!");
	    	} else {
	    		return redirect('customers')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
