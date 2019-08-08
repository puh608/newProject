<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getter extends Model
{
    protected $table = "ea_getters";

    protected $fillable = [
    	'sys_ownerID', 'getter_ID', 'getter_name', 'getter_qualificationID', 'getter_birthDate', 'getter_birthLocation', 'getter_address', 'getter_cap', 'getter_location', 'getter_telephone1', 'getter_telephone2', 'getter_fax', 'getter_email', 'getter_billPercentage', 'getter_notes', 'getter_username', 'getter_password', 'getter_isWelcome'
    ];

    protected $primaryKey = 'getter_ID';

    public $timestamps = false;
}
