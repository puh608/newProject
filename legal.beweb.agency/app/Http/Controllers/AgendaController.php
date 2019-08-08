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

use App\EaCalendarnotes;

class AgendaController extends Controller{
    public function index(Request $request){
         if(!Session::get('userid')) return Redirect('login');
        $month=$request->get("month",0);
        $year=$request->get("year",0);
        if(!$month||!$year){
            $month=date('m');
            $year=date('Y');
        }
        $sql="SELECT * FROM ea_agencies";
        $agencies=DB::select($sql);
        $agencies = array_map(function ($value) {
            return (array)$value;
        }, $agencies);
        $agency_ID = Session::get('useragencyid');//@TODO change it after login session  9=$_SESSION['user_info']['user_agencyID']
        $data['agencies']=$agencies;
        $data['selmonth']=$month;
        $data['selyear']=$year;
        
        return view('agenda',$data);
    }
    public function addAgenda(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $sys_ownerID= $request->get("agency_ID",Session::get('useragencyid'));;//TODO change later;
        $calendarNote_date = $request->input('notedate',date('d/m/Y'));
        $calendarNote_weekDay=date('w', strtotime($calendarNote_date));
    	$calendarNote_fromTime=$request->input('statTime1').":".$request->input('statTime2');
    	$calendarNote_toTime=$request->input('toTime1').":".$request->input('toTime2');
        $calendarNote_repeatTypeID=$request->input('repeatTypeID');
        $calendarNote_description=$request->input('notedescription');
        $calendarNote_isSecretary=$request->input('isSecretary',0);
  
        DB::insert('INSERT INTO ea_calendarNotes (sys_ID,sys_ownerID,calendarNote_date,calendarNote_weekDay,calendarNote_fromTime,calendarNote_toTime,calendarNote_repeatTypeID,calendarNote_description,calendarNote_isSecretary ) values(?,?,?,?,?,?,?,?,?)',['',$sys_ownerID,$calendarNote_date,$calendarNote_weekDay,$calendarNote_fromTime,$calendarNote_toTime,$calendarNote_repeatTypeID,$calendarNote_description,$calendarNote_isSecretary]);
        echo "success";exit;
    }
    public function editAgenda(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $calendarNote_ID=$request->input('calendarNote_ID');
        $calendarNote_date = $request->input('calendarNote_date',date('d/m/Y'));
        $calendarNote_weekDay=date('w', strtotime($calendarNote_date));
    	$calendarNote_fromTime=$request->input('calendarNote_fromTime');
    	$calendarNote_toTime=$request->input('calendarNote_toTime');
        $calendarNote_repeatTypeID=$request->input('calendarNote_repeatTypeID');
        $calendarNote_description=$request->input('calendarNote_description');
        $calendarNote_isSecretary=$request->input('calendarNote_isSecretary',0);
  
        DB::update('UPDATE ea_calendarNotes SET calendarNote_date=?,calendarNote_weekDay=?,calendarNote_fromTime=?,calendarNote_toTime=?,calendarNote_repeatTypeID=?,calendarNote_description=?,calendarNote_isSecretary=?  WHERE calendarNote_ID=?',[$calendarNote_date,$calendarNote_weekDay,$calendarNote_fromTime,$calendarNote_toTime,$calendarNote_repeatTypeID,$calendarNote_description,$calendarNote_isSecretary,$calendarNote_ID]);
        echo "success";exit;
    }
    public function deleteAgenda(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $calendarNote_ID=$request->input('calendarNote_ID',0);
        if($calendarNote_ID){
            DB::delete('DELETE FROM ea_calendarNotes WHERE calendarNote_ID=?',[$calendarNote_ID]);
            echo "success";
        }else{
            echo "failure-".$calendarNote_ID;
        }
    }
    public function getAgendaByMonth(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $month=$request->get("month",0);
        $year=$request->get("year",0);
        if(!$month||!$year){
            $month=date('m');
            $year=date('Y');
        }
        
        $calendarNotesCounts = Array(0);
	$calendarNotes = Array(0);
        $events="";
        $agency_ID = $request->get("agency_ID",Session::get('useragencyid'));//@TODO change it after login session  9=$_SESSION['user_info']['user_agencyID']
	for($i=1;$i<=31;$i++){
            $dayTime = mktime(0,0,0,$month,$i,$year);
            $sql="SELECT * FROM ea_calendarNotes WHERE (
                (calendarNote_repeatTypeID=0 AND calendarNote_date LIKE '".date('d/m/Y',$dayTime)."')													OR
                (calendarNote_repeatTypeID=1 AND calendarNote_date LIKE '".date('d/m/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=2 AND calendarNote_date LIKE '".date('d/%/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=3 AND calendarNote_weekDay='".date('w',$dayTime)."'			AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=4 AND ".date('Ymd',$dayTime).">=".date('Ymd').")
        ) AND sys_ownerID='".$agency_ID."'";
            
           //{"2018-09-17":{"number":12,"badge-class":warning},"2018-09-17":{"number":12,"badge-class":warning}}
            $calendarNotes[$i] = DB::select($sql);
            if($calendarNotes[$i]){
                $tmp_calendarNote_ID=array();
                foreach($calendarNotes[$i] as $calendarNote){
                    $tmp_calendarNote_ID[]=$calendarNote->calendarNote_ID;
                }
                $events.='"'.$year.'-'.$month.'-'. addzero($i).'":{"number":'.count($calendarNotes[$i]).',"badgeClass":"badge-warning","calendarNote_IDs":'. json_encode($tmp_calendarNote_ID).'},';
            }
            
            if(empty($calendarNotes[$i])){
                    $calendarNotesCounts[$i] = 0;
            }else{
                    $calendarNotesCounts[$i] = count($calendarNotes[$i]);
            }
	}
        
        echo "{".rtrim($events, ',')."}";
        exit;
    }
    public function getAgendaByDate(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $agency_ID = $request->get("agency_ID",Session::get('useragencyid'));;//TODO change later;
        $calendarNote_date = $request->input('notedate',date('d/m/Y'));
        $sql="SELECT * FROM ea_calendarNotes WHERE calendarNote_date = '".$calendarNote_date."' AND sys_ownerID='".$agency_ID."'";
        $calendarNotes=DB::select($sql);
        $calendarNotes = array_map(function ($value) {
            return (array)$value;
        }, $calendarNotes);
        echo json_encode($calendarNotes);exit;
    }
    /**
     * 
     * @param Request $request 
     * @decription called by  calendar day click
     * @return select * calendar notes by note ids
     */
    public function getAgendaByNoteIds(Request $request){
        if(!Session::get('userid')){
            echo "fail";exit;
        }
        $agency_ID = $request->get("agency_ID",Session::get('useragencyid'));;//TODO change later;
        $calendarnote_ids=$request->get("calendarnote_ids","");
        if($calendarnote_ids){
            $sql="SELECT * FROM ea_calendarNotes WHERE calendarNote_ID IN (".$calendarnote_ids.") AND sys_ownerID='".$agency_ID."'";
            $calendarNotes=DB::select($sql);
            $calendarNotes = array_map(function ($value) {
                return (array)$value;
            }, $calendarNotes);
            echo json_encode($calendarNotes);exit;
        }else{
            echo "no agenda notes!";
        }
        
    }
}



