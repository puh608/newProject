<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceAgency extends Model
{
    protected $table = "ea_insuranceAgencies";

    protected $fillable = [
    	'sys_ownerID', 'insuranceAgency_ID', 'insuranceAgency_name', 'insuranceAgency_address', 'insuranceAgency_cap', 'insuranceAgency_location', 'insuranceAgency_telephone1', 'insuranceAgency_telephone2', 'insuranceAgency_fax', 'insuranceAgency_email', 'insuranceAgency_notes'
    ];

    protected $primaryKey = 'insuranceAgency_ID';

    public $timestamps = false;
}
