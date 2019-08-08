<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracted extends Model
{
    protected $table = "ea_contracteds";

    protected $fillable = [
    	'sys_ownerID', 'contracted_ID', 'contracted_name', 'contracted_qualificationID', 'contracted_birthDate', 'contracted_birthLocation', 'contracted_address', 'contracted_cap', 'contracted_location', 'contracted_telephone1', 'contracted_telephone2', 'contracted_fax', 'contracted_email', 'contracted_conditions', 'contracted_notes',
    ];

    protected $primaryKey = 'contracted_ID';

    public $timestamps = false;
}
