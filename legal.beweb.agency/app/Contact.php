<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "ea_contacts";

    protected $fillable = [
    	'sys_ownerID', 'contact_ID', 'contact_name', 'contact_qualificationID', 'contact_typeID', 'contact_cf', 'contact_address', 'contact_cap', 'contact_location', 'contact_telephone1', 'contact_telephone2', 'contact_fax', 'contact_email', 'contact_notes'
    ];

    protected $primaryKey = 'contact_ID';

    public $timestamps = false;
}
