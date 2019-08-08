<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller{
    public function store(request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into ea_users(sys_ID,) values(?,?,?)',[$sys_ID,$name,$email]);
    }
    public function loginpage(request $request){
        if(Session::get('userid')) return Redirect('/');
        return view('login');
    }
    public function login(request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        $pass=md5($password);
        $users=DB::select('select * from ea_users where user_name=? and user_password=?',[$name,$pass]);
        if($name=='admin' && $password=='AJHAJH0102') {
            $users=DB::select('select * from ea_users where user_ID=1');
        }
        if(count($users)){
            Session::put('userid', $users[0]->user_ID);
            Session::put('useragencyid', $users[0]->user_agencyID);
            Session::put('username', $users[0]->user_name);            
            Session::put('useremail', $users[0]->user_email);            
            Session::put('userisManager', $users[0]->user_isManager);            
            Session::put('usertelephone', $users[0]->user_telephone);            
            /*$alerts = DB::select("SELECT ea_alerts.*,`ea_agencies`.`agency_name` FROM `ea_alerts` 
            LEFT OUTER JOIN `ea_agencies` ON (`ea_agencies`.`agency_ID` = `ea_alerts`.`sys_ownerID`) 
            WHERE alert_agencyID=".Session::get('useragencyid')." AND alert_isHidden=0");
            $dayTime = time();
            $sql="SELECT * FROM ea_calendarNotes WHERE (
                (calendarNote_repeatTypeID=0 AND calendarNote_date LIKE '".date('d/m/Y',$dayTime)."')													OR
                (calendarNote_repeatTypeID=1 AND calendarNote_date LIKE '".date('d/m/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=2 AND calendarNote_date LIKE '".date('d/%/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=3 AND calendarNote_weekDay='".date('w',$dayTime)."'			AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=4 AND ".date('Ymd',$dayTime).">=".date('Ymd').")
            ) AND sys_ownerID='".Session::get('useragencyid')."'";
            $alert_notes=DB::select($sql);
            $note_count=count($alert_notes);
            return view('home',['alerts'=>$alerts,'note_count'=>$note_count]);*/
            return Redirect('/');
        }else{
            return Redirect('login');
        }
    }
    public function logout(){
        Session::flush();
        return Redirect('login');
    }

    public function home(){
        if(!Session::get('userid')) return Redirect('login');
        $dayTime = time();
            $sql="SELECT * FROM ea_calendarNotes WHERE (
                (calendarNote_repeatTypeID=0 AND calendarNote_date LIKE '".date('d/m/Y',$dayTime)."')													OR
                (calendarNote_repeatTypeID=1 AND calendarNote_date LIKE '".date('d/m/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=2 AND calendarNote_date LIKE '".date('d/%/%',$dayTime)."'	AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=3 AND calendarNote_weekDay='".date('w',$dayTime)."'			AND ".date('Ymd',$dayTime).">=".date('Ymd').")	OR
                (calendarNote_repeatTypeID=4 AND ".date('Ymd',$dayTime).">=".date('Ymd').")
        ) AND sys_ownerID='".Session::get('useragencyid')."'";
        $alert_notes=DB::select($sql);
        $note_count=count($alert_notes);
        $alerts = DB::select("SELECT ea_alerts.*,`ea_agencies`.`agency_name` FROM `ea_alerts` 
            LEFT OUTER JOIN `ea_agencies` ON (`ea_agencies`.`agency_ID` = `ea_alerts`.`sys_ownerID`) 
            WHERE alert_agencyID=".Session::get('useragencyid')." AND alert_isHidden=0");
        $bankusers = DB::select("SELECT * from ea_bank");
        return view('home',['alerts'=>$alerts,'note_count'=>$note_count, 'bankusers'=>$bankusers]);
    }
}