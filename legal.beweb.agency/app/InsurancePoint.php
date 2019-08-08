<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsurancePoint extends Model
{
    protected $table = "ea_insurancePoints";

    protected $fillable = [
    	'sys_ownerID', 'insurancePoint_ID', 'insurancePoint_name', 'insurancePoint_insuranceID', 'insurancePoint_denomination', 'insurancePoint_address', 'insurancePoint_cap', 'insurancePoint_location', 'insurancePoint_telephone1', 'insurancePoint_telephone2', 'insurancePoint_fax', 'insurancePoint_email', 'insurancePoint_timeTable_pub1', 'insurancePoint_timeTable_tel1', 'insurancePoint_timeTable_pub2', 'insurancePoint_timeTable_tel2', 'insurancePoint_timeTable_pub3', 'insurancePoint_timeTable_tel3', 'insurancePoint_timeTable_pub4', 'insurancePoint_timeTable_tel4', 'insurancePoint_timeTable_pub5', 'insurancePoint_timeTable_tel5', 'insurancePoint_timeTable', 'insurancePoint_notes'
    ];

    protected $primaryKey = 'insurancePoint_ID';

    public $timestamps = false;

    public function insurance(){
    	return $this->belongsTo('App\Insurance', 'insurancePoint_insuranceID');
    }
}
