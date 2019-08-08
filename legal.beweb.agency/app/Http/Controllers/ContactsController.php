<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    
    public function index(){

    	$contacts = \App\Contact::get();

    	$contact_types_list = config('global.CONTACT_TYPES_LIST');

    	return view('archive.contacts.index', ['contacts' => $contacts, 'contact_types_list' => $contact_types_list]);
    }

    public function new(){

    	$data['contact_qualifications_list'] = config('global.CONTACT_QUALIFICATIONS_LIST');
    	$data['contact_types_list'] = config('global.CONTACT_TYPES_LIST');

    	return view('archive.contacts.new', $data);
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['contact_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Contact::create($req)){
    		return redirect('contacts')->with('success',"Saved!");
    	} else {
    		return redirect('contacts')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Contact::where('contact_ID', $id)->first()){

    		$data['rec'] = $rec;
    		$data['contact_qualifications_list'] = config('global.CONTACT_QUALIFICATIONS_LIST');
    		$data['contact_types_list'] = config('global.CONTACT_TYPES_LIST');

    		return view('archive.contacts.edit', $data);
    	} else {
    		return redirect('contacts')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Contact::where('contact_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['contact_'.$key] = $value;
	    		} else {
	    			$req['contact_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('contacts')->with('success',"Saved!");
	    	} else {
	    		return redirect('contacts')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
