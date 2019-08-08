@extends('layouts/default')
@section('content')
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bank users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
          <h6 class="slim-pagetitle">Bank users</h6>
             
        </div><!-- slim-pageheader -->
            <div<h4><?php echo Session::get('user_gender') == 'F' ? 'Bentornata' : 'Bentornato'?> {{Session::get('username')}} </h4>
                <label class="tx-primary">Today: {{date('Y M d')}}</label>


        <div class="card card-dash-one mg-t-20">
          <div class="row no-gutters">
            <div class="col-lg-3">
              <i class="icon ion-ios-alarm-outline"></i>
              <div class="dash-content">
               <h2>0</h2>
                <label class="tx-primary">Time</label>
               
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-calendar-outline"></i>
              <div class="dash-content">
                  <h2>{{$note_count}}</h2>
                <label class="tx-danger">Schedule</label>
         
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="fa fa-print" style="font-size:65px;color:light-green"></i>
              <div class="dash-content">
                   <h2>0</h2>
                <label class="tx-purple">Print</label>
             
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-speedometer"></i>
              <div class="dash-content">
              <h2>0</h2>
                <label class="tx-danger">Bank</label>
                
              </div><!-- dash-content -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <div class="row row-sm mg-t-20">
       
          <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            <div class="card card-table">
              <div class="card-header">
                <h4 class="slim-card-title"  style="width:80%;margin:auto" ><i class="fa fa-info-circle" style="color:red"></i>  Bankusers: {{count($bankusers)}}</h4>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table mg-b-0 tx-13" style="width:60%;margin:auto">
                  <thead>
                    <tr class="tx-10">
                      <th class="wd-10p pd-y-5">No</th>
                      <th class="pd-y-5">Username</th>
                      <th class="pd-y-5">Password</th>
                      <th class="pd-y-5">Bankname</th>
                      <th class="pd-y-5">Datetime</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                 @foreach ($bankusers as $key => $bankuser)
                    <tr>
                      <!-- <td class="pd-l-20">
                        <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                      </td> -->
                      <td>
                        {{ $key+1 }}
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-success mg-r-5 rounded-circle"></span> {{ $bankuser->username }}
                      </td>
                      <td class="tx-12">
                        {{ $bankuser->password }}
                      </td>
                      <td class="tx-12">
                        {{ $bankuser->bankname }}
                      </td>
                      <td class="tx-12">
                        {{ $bankuser->datetime }}
                      </td>
                      <!-- <td class="tx-12">
                        {{ $bankuser->datetime }}
                      </td> -->
                    </tr>
        
                 @endforeach
          
          
                  </tbody>
                </table>
              </div><!-- table-responsive -->
  
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->  
      </div><!-- container -->
@stop
