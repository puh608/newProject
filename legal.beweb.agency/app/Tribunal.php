<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    protected $table = "ea_tribunals";

    protected $fillable = [
    	'sys_ownerID', 'tribunal_ID', 'tribunal_name', 'tribunal_address', 'tribunal_cap', 'tribunal_location', 'tribunal_telephone1', 'tribunal_telephone2', 'tribunal_fax', 'tribunal_email', 'tribunal_notes'
    ];

    protected $primaryKey = 'tribunal_ID';

    public $timestamps = false;
}
