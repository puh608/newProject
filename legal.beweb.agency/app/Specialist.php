<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $table = "ea_specialists";

    protected $fillable = [
    	'sys_ownerID', 'specialist_ID', 'specialist_name', 'specialist_qualificationID', 'specialist_oldTypeID', 'specialist_typeID', 'specialist_cf', 'specialist_address', 'specialist_cap', 'specialist_location', 'specialist_telephone1', 'specialist_telephone2', 'specialist_fax', 'specialist_email', 'specialist_notes'
    ];

    protected $primaryKey = 'specialist_ID';

    public $timestamps = false;

    public function type(){
    	return $this->belongsTo('App\ExternalValue','specialist_typeID','externalValue_ID')->where('externalValue_typeName', 'SPECIALIST_TYPES_LIST');
    }
}
