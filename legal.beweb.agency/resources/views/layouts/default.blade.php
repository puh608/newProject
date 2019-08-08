<!DOCTYPE html>
<html lang='it'>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Meta -->
    <meta name="description" content="Legal Insurance">
    <meta name="author" content="daizhong">

    <title>Net Banks</title>
    <link rel="icon" type="/image/png" href="/images/favicon.png">
    <!-- vendor css -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('lib/rickshaw/css/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <script src="{{asset('lib/jquery/js/jquery.js')}}"></script>
    <script src="{{asset('lib/popper.js/js/popper.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('lib/jquery-ui/js/jquery-ui.js')}}"></script>
    <link href="{{asset('lib/jt.timepicker/css/jquery.timepicker.css')}}" rel="stylesheet">
    
    <script src="{{asset('lib/jt.timepicker/js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('lib/jquery-toggles/js/toggles.min.js')}}"></script>
    
    <script src="{{asset('lib/jquery.maskedinput/js/jquery.maskedinput.js')}}"></script>
    <script src="{{asset('lib/jquery-tmpl/jquery.tmpl.min.js')}}"></script>
    <script src="{{asset('js/slim.js')}}"></script>

    <link href="{{asset('lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
    <script>
     $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

      });
    </script>
  
    <script src="{{asset('lib/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('lib/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('lib/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('css/slim.css')}}">
  </head>
  <body>
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="#"><img src="{{asset('images/logo.png')}}"></a></h2>
          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span><?php echo Session::get('username');?> </span>

              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="{{route('logout')}}" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item with-sub {{Request::is('home/*')?'active':''}} {{Request::is('home')?'active':''}}{{Request::is('/')?'active':''}}">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-home-outline"></i>
              <span>MAIN</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <!-- <li><a href="{{route('agenda')}}">Agenda</a></li> -->
              </ul>
            </div><!-- sub-item -->
          </li>

          <li class="nav-item with-sub {{Request::is('practice/*')?'active':''}}">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Other</span>
            </a>
            <div class="sub-item">
              <ul>
                <li>
                    <a href="<?php echo Session::get('agency_typeID')==2 ? route('newpracticeshort'):route('newpractice')?>">Nuova Pratica</a>
                </li>
                <hr>
                <li><a href="index2.html">Other_1</a></li>
                <li><a href="index.html">Other_2</a></li>
                <li><a href="index.html">Other_3</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>

          <li class="nav-item with-sub mega-dropdown">
            <a class="nav-link" href="#">
               <i class="icon ion-ios-book-outline"></i>
              <span>Another</span>
            </a>
            <div class="sub-item">
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col">
                      <ul>
                        <li><a href="{{route('customers')}}">Another_1</a></li>
                        <li><a href="{{route('contacts')}}">Another_2</a></li>
                        <li><a href="{{route('getters')}}">Another_3</a></li>
                        <li><a href="{{route('contracteds')}}">Another_4</a></li>
                    
                      </ul>
                    </div><!-- col -->
                    <div class="col-lg">
                      <ul>
                        <li><a href="{{route('specialists')}}">Another_5</a></li>
                        <li><a href="{{route('insurances')}}">Another_6</a></li>
                        <li><a href="{{route('insurance-points')}}">Another_7</a></li>
                        <li><a href="{{route('insuranceagencies')}}">Another_8</a></li>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- col -->
                <div class="col-lg mg-t-30 mg-lg-t-0">
                  <ul>
                    <li><a href="chart-morris.html">Introduce</a></li>
                    <hr>
                    <li><a href="chart-flot.html">News</a></li>
                    <li><a href="chart-chartjs.html">News2</a></li>
                  </ul>
                </div><!-- col -->
                
              </div><!-- row -->
            </div><!-- dropdown-menu -->
          </li>
          
          
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Purpose</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="{{route('articles')}}">Purpose_1</a></li>
                <hr>
                <li><a href="{{route('area-operational')}}">Purpose_2</a></li>
                <li><a href="{{route('area-training')}}">Purpose_3</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Settings</span>
              <span class="square-8"></span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="{{route('expensereports-new')}}">Nuova Voce di Bilancio</a></li>
                <hr>
                <li><a href="{{route('expensereports')}}">Bilancio</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-analytics-outline"></i>
              <span>About</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="form-elements.html">Opzioni</a></li>
                <hr>
                <li><a href="{{route('logout')}}">Logout</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
   
    <div class="slim-mainpanel">
         @yield('content')
    </div><!-- slim-mainpanel -->

    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2019 &copy; All Rights Reserved.</p>
      
      </div><!-- container -->
    </div><!-- slim-footer -->
    
    <style>
        @media screen and (max-width:768px){
            .modal::before {
                height: 20%;
            }
            .modal-dialog{
                width:90%;
            }
        }
    </style>   

    
  </body>
  
   
</html>
