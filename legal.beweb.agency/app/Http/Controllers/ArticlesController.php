<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index(){

    	$articles = \App\Article::get();

    	return view('articles.index', ['articles' => $articles]);
    }

    public function new(){
    	return view('articles.new');
    }

    public function newSave(Request $request){
    	$req = $request->except('_token');

    	foreach ($req as $key => $value) {
    		if($value != ""){
    			$req['article_'.$key] = $value;
    		}
    		unset($req[$key]);
    	}

    	$req['sys_ownerID'] = session()->get('useragencyid');

    	if($rec = \App\Article::create($req)){
    		return redirect('articles')->with('success',"Saved!");
    	} else {
    		return redirect('articles')->with('error',"Could not saved!");
    	}
    }

    public function edit($id){
    	if($rec = \App\Article::where('article_ID', $id)->first()){

    		$data['rec'] = $rec;

    		return view('articles.edit', $data);
    	} else {
    		return redirect('articles')->with('error','Not found!');
    	}
    }

    public function editSave($id, Request $request){
    	if($rec = \App\Article::where('article_ID', $id)->first()){
    		$req = $request->except('_token');

	    	foreach ($req as $key => $value) {
	    		if($value != ""){
	    			$req['article_'.$key] = $value;
	    		} else {
	    			$req['article_'.$key] = "";
	    		}
	    		unset($req[$key]);
	    	}

	    	if($rec->update($req)){
	    		return redirect('articles')->with('success',"Saved!");
	    	} else {
	    		return redirect('articles')->with('error',"Could not saved!");
	    	}
    	}
    	
    }
}
