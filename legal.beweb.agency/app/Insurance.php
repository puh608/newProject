<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = "ea_insurances";

    protected $fillable = [
    	'sys_ownerID', 'insurance_ID', 'insurance_name', 'insurance_address', 'insurance_cap', 'insurance_location', 'insurance_telephone1', 'insurance_telephone2', 'insurance_fax', 'insurance_email', 'insurance_notes'
    ];

    protected $primaryKey = 'insurance_ID';

    public $timestamps = false;
}
