<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = "ea_banks";

    protected $fillable = [
    	'sys_ownerID', 'bank_ID', 'bank_name', 'bank_address', 'bank_cap', 'bank_location', 'bank_telephone1', 'bank_telephone2', 'bank_fax', 'bank_email', 'bank_notes'
    ];

    protected $primaryKey = 'bank_ID';

    public $timestamps = false;
}
