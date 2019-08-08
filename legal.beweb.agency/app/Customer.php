<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "ea_customers";

    protected $fillable = [
    	'sys_ownerID', 'customer_name', 'customer_qualificationID', 'customer_cf', 'customer_birthDate', 'customer_birthLocation', 'customer_documentTypeID', 'customer_documentNumber', 'customer_documentReleaseDate', 'customer_occupation', 'customer_address', 'customer_cap', 'customer_location', 'customer_telephone1', 'customer_telephone2', 'customer_fax', 'customer_email', 'customer_feedbackDate', 'customer_feedbackEvaluation', 'customer_feedbackText', 'customer_notes', 'customer_gotByID', 'customer_username', 'customer_password', 'customer_sessionID', 'customer_isWelcome', 'customer_userFeedback', 'customer_canPublishUserFeedback'
    ];

    protected $primaryKey = 'customer_ID';

    public $timestamps = false;
}
