<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    protected $table = "ea_expenseReports";

    protected $fillable = [
    	'sys_ownerID', 'expenseReport_ID', 'expenseReport_date', 'expenseReport_time', 'expenseReport_typeID', 'expenseReport_expenseTypeID', 'expenseReport_supplierName', 'expenseReport_price', 'expenseReport_iva', 'expenseReport_total', 'expenseReport_paymentTypeID', 'expenseReport_notes'
    ];

    protected $primaryKey = 'expenseReport_ID';

    public $timestamps = false;
}
