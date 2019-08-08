<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = "ea_agencies";

    public function type(){
    	return $this->belongsTo('App\ExternalValue','agency_newTypeID','externalValue_ID');
    }

    public function users(){
    	return $this->hasMany('App\User','user_agencyID','agency_ID')->where('user_isManager',1);
    }
}
