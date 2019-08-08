<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAgency extends Model
{
    protected $table = "ea_bankAgencies";

    protected $fillable = [
    	'sys_ownerID', 'bankAgency_ID', 'bankAgency_name', 'bankAgency_bankID', 'bankAgency_abi', 'bankAgency_cab', 'bankAgency_address', 'bankAgency_cap', 'bankAgency_location', 'bankAgency_telephone1', 'bankAgency_telephone2', 'bankAgency_fax', 'bankAgency_email', 'bankAgency_notes'
    ];

    protected $primaryKey = 'bankAgency_ID';

    public $timestamps = false;

    public function bank(){
    	return $this->belongsTo('App\Bank', 'bankAgency_bankID');
    }
}
