<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Calendar;
use DateTime;
use Auth;
use Validator;
use Redirect;
use Session;
class PracticeController extends Controller{

    public function newPractice(Request $request){
        if(!Session::get('userid')) return Redirect('login');
        $data=array();

        /*$sql="SELECT agency_ID, agency_ID as ID, agency_name, agency_typeID FROM ea_agencies WHERE agency_isVisible=1";
        $data['archiveAgencies']=DB::select($sql);*/

        $agencies = \App\Agency::with(['type','users'])->where('agency_isVisible',1)->get();

        $data['archiveManagers'] = $agencies;
        
        $sql="SELECT customer_ID, customer_ID as ID, customer_name FROM ea_customers";
        $data['archiveCustomers']=DB::select($sql);
        $sql="SELECT company_ID, company_ID as ID, company_name FROM ea_companies";
        $data['archiveCompanies']=DB::select($sql);

        $data['PRACTICE_TYPES_LIST'] = config('global.PRACTICE_TYPES_LIST');
        $data['PRACTICE_MANAGEMENT_TYPES_LIST'] = config('global.PRACTICE_MANAGEMENT_TYPES_LIST');
        $data['PRACTICE_MANAGEMENTCL_TYPES_LIST'] = config('global.PRACTICE_MANAGEMENTCL_TYPES_LIST');
        $data['PRACTICE_MANAGEMENTAB_TYPES_LIST'] = config('global.PRACTICE_MANAGEMENTAB_TYPES_LIST');
        $data['PRACTICE_PART_TYPES_LIST'] = config('global.PRACTICE_PART_TYPES_LIST');
        $data['PRACTICE_PERSON_TYPES_LIST'] = config('global.PRACTICE_PERSON_TYPES_LIST');
        $data['PRACTICE_PERSON_PG_LIST'] = config('global.PRACTICE_PERSON_PG_LIST');
        $data['PRACTICE_PERSON_DAMAGE_TYPES_LIST'] = config('global.PRACTICE_PERSON_DAMAGE_TYPES_LIST');

        return view('newpractice',$data);
    }

    public function getGetters(){
        $getters = \App\Getter::get();

        return datatables()->of($getters)->toJson();
    }

    public function getCustomers(){
        $useragencyid = session()->get('useragencyid');
        $customers = \App\Customer::where('sys_ownerID', $useragencyid)->get();
        
        return datatables()->of($customers)->toJson();
    }
}


