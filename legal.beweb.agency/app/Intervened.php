<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervened extends Model
{
    protected $table = "ea_interveneds";

    protected $fillable = [
    	'sys_ownerID', 'intervened_ID', 'intervened_name', 'intervened_address', 'intervened_cap', 'intervened_location', 'intervened_telephone1', 'intervened_telephone2', 'intervened_fax', 'intervened_email', 'intervened_notes'
    ];

    protected $primaryKey = 'intervened_ID';

    public $timestamps = false;
}
