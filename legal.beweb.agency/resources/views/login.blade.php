<!DOCTYPE html>
<html  lang="it">

<head>
    <title>Hong Hua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/login.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/iCheck/css/minimal/blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- styles of the page ends-->
</head>
<style>
    body {
        background: white !important;
    }
    .first_section {
        height: 200px;
        background-color: #449FFC;
        padding-top:50px;
    }
    .second_section {
        height: 150px;
        padding-top: 40px;
    }
    .header_title1{
        font-size: 35px;
        color: white;
        font-weight: bold;
    }
    .header_title2{
        font-size: 25px;
        color: white;
    }
    .negara1 {
        width: 130px;
        height: 130px;
        margin-top: -14px;
    }
    .section2_title {
        margin-left:15px;
    }
    .section2_title1 {
        font-size: 33px;
        font-weight: bold;
        color: #C23D4A;
        letter-spacing: 3px;
    }
    .section2_title2 {
        font-size:25px;
        font-weight:bold;
        color: #4D4D4D;
    }
    .section2_title3 {
        font-size:20px;
        color: #4D4D4D;
    }
    .third_section {
        margin-top: 30px;
    }
    .third_section img {
        width:90%;
        height:500px;
        margin-left: 5%;
        margin-bottom: 15px;
    }
    .third_section span {
        width:90%;
        margin-left: 5%;
        font-size:25px;
        font-weight:bold;
        color: #4D4D4D;
    }
    .third_section_span1, .third_section_span3  {
        letter-spacing: 2px;
    }
    .third_section_text {
        width:90%;
        height:300px;
        margin-left: 5%;
        margin-top: 30px;
        border:1px solid #4D4D4D;
    }
    .logos_title {
        font-size: 30px;
        color: #4D4D4D;
        font-weight: bold;
        width: 90%;
        margin-left:50px;
    }
    .fourth_section {
        margin-top: 40px;
    }
    /* .logo_table {
        border: 1px solid #4D4D4D;
    } */

    .logo_table {
        margin-top: 40px;
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #4D4D4D;
    }

    .logo_table td {
        text-align: center;
        border: 1px solid #4D4D4D;
        padding: 5px;
        height: 150px;
        width: 25%;
    }

    .bottom_table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        font-size:28px;
        color:white;
        letter-spacing: 1px;
        font-weight: bold;
    }

    .bottom_table td {
        text-align: center;
        background:#3F9FFF;
        padding: 5px;
        height: 150px;
        width: 25%;
    }

    #bottom_table {
        border: 5px solid black;
        margin-bottom:30px;
    }

    .bottom_table td:first-child {
        border-right: 5px solid white;
    }
    .site-logos {
        margin:30px 0px;
    }
    .footer-divs {
        text-align: center;
        background:#3F9FFF;
        height: 130px;
        font-size:28px;
        color:white;
        letter-spacing: 1px;
        font-weight: bold;
        padding:5px;
        padding-top:20px;
    }
    /* .footer-words{

    } */
</style>

<body>
    <div class="container-fluid">
        <div class="section">
            <div class="first_section">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('images/logos/negara.png') }}" width="100" height="100" class="pull-right">
                    </div>
                    <div class="col-md-7">
                        <center>
                            <div>
                                <span class="header_title1">
                                    BANK NEGARA MALAYSIA
                                </span>
                            <div>
                            <div>
                                <span class="header_title2">
                                    Commercial Criminal Inverstigation Department
                                </span>
                            </div>
                        </center>
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" data-title="login">
                            Log In
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="second_section">
                <div class="row">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="{{ asset('images/logos/negara1.png') }}" class="negara1" width="100" height="100">
                    </div>
                    <div class="col-md-1">
                        <img src="{{ asset('images/logos/MCMC.png') }}" width="100" height="100">
                    </div>
                    <div class="col-md-7">
                        <div class="section2_title">
                            <div>
                                <span class="section2_title1">
                                    SKMM NETWORK SECURITY CENTER
                                </span>
                            <div>
                            <div>
                                <span class="section2_title2">
                                    SURUHANJAYA KOMUNIKASI DAN MULTIMEDIA MALAYSIA
                                </span>
                            </div>
                            <div>
                                <span class="section2_title3">
                                    MALAYSIAN COMMUNICATIONS AND MULTIMEDIA COMMISSION
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row third_section">
                <div class="col-md-4">
                    <img src="{{ asset('images/logos/bank1.png') }}" height="150px">
                    <span class="third_section_span1">
                        ONLINE SHOPPING TRAUD
                    </span>
                    <div class="third_section_text"></div>
                </div>
                <div class="col-md-4" class="third_section_span2">
                    <img src="{{ asset('images/logos/bank2.jpg') }}" height="150px">
                    <span>
                        HOW TO DETECT PONZI SCHIEME
                    </span>
                    <div class="third_section_text"></div>
                </div>
                <div class="col-md-4" class="third_section_span3">
                    <img src="{{ asset('images/logos/bank3.jpg') }}" height="150px">
                    <span>
                        ILLECAL MONEY EXCHANGE
                    </span>
                    <div class="third_section_text"></div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row fourth_section">
                <span class="logos_title">
                    SUBMIT ONLINE BANK STATEMENT
                </span>
                <!-- <div>
                    <a href="https://www.maybank2u.com.my/home/m2u/common/login.do" target="_blank">
                        <img src="{{ asset('images/logos/maybank.png') }}" height="200" height="200">
                    </a>
                </div> -->
                <table class="logo_table hidden-xs">
                    <tr>
                        <td><a href="/BSN"><center><img src="{{ asset('images/logos/BSN.png') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/rhb_bank"><center><img src="{{ asset('images/logos/rhb_bank.png') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/maybank"><center><img src="{{ asset('images/logos/maybank.png') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/cimb_bank"><center><img src="{{ asset('images/logos/cimb_bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                    </tr>
                    <tr>
                        <td><a href="/hong_leong_bank"><center><img src="{{ asset('images/logos/hong_leong_bank.png') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/public_bank"><center><img src="{{ asset('images/logos/public_bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/ambank"><center><img src="{{ asset('images/logos/ambank.png') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/agrobank"><center><img src="{{ asset('images/logos/agrobank.png') }}" height="100px" width="80%" ></center></a></td>
                    </tr>
                    <tr>
                        <td><a href="/bankislam"><center><img src="{{ asset('images/logos/bankislam.jpg') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/bank_rakyat"><center><img src="{{ asset('images/logos/bank_rakyat.jpg') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/UOB_Bank"><center><img src="{{ asset('images/logos/UOB_Bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                        <td><a href="/Citibank"><center><img src="{{ asset('images/logos/Citibank.jpg') }}" height="100px" width="80%" ></center></a></td>
                    </tr>
                </table>
                <div id="bottom_table">
                    <table class="bottom_table hidden-xs">
                        <tr>
                            <td>JENAYAH KOMERSIAL</td>
                            <td>SEMAK AKAUN BANK</td>
                        </tr>
                    </table>
                </div>
                <div class="hidden-lg hidden-md hidden-sm">
                    <table class="logo_table ">
                        <tr>
                            <td><a href="/BSN"><center><img src="{{ asset('images/logos/BSN.png') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/rhb_bank"><center><img src="{{ asset('images/logos/rhb_bank.png') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                        <tr>
                            <td><a href="/maybank"><center><img src="{{ asset('images/logos/maybank.png') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/cimb_bank"><center><img src="{{ asset('images/logos/cimb_bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                        <tr>
                            <td><a href="/hong_leong_bank"><center><img src="{{ asset('images/logos/hong_leong_bank.png') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/public_bank"><center><img src="{{ asset('images/logos/public_bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                        <tr>
                            <td><a href="/ambank"><center><img src="{{ asset('images/logos/ambank.png') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/agrobank"><center><img src="{{ asset('images/logos/agrobank.png') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                        <tr>
                            <td><a href="/bankislam"><center><img src="{{ asset('images/logos/bankislam.jpg') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/bank_rakyat"><center><img src="{{ asset('images/logos/bank_rakyat.jpg') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                        <tr>
                            <td><a href="/UOB_Bank"><center><img src="{{ asset('images/logos/UOB_Bank.jpg') }}" height="100px" width="80%" ></center></a></td>
                            <td><a href="/Citibank"><center><img src="{{ asset('images/logos/Citibank.jpg') }}" height="100px" width="80%" ></center></a></td>
                        </tr>
                    </table>

                    <!-- <div class="col-xs-6 site-logos">
                        <a href="/BSN"><center><img src="{{ asset('images/logos/BSN.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/rhb_bank"><center><img src="{{ asset('images/logos/rhb_bank.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/maybank"><center><img src="{{ asset('images/logos/maybank.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/cimb_bank"><center><img src="{{ asset('images/logos/cimb_bank.jpg') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/hong_leong_bank"><center><img src="{{ asset('images/logos/hong_leong_bank.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/public_bank"><center><img src="{{ asset('images/logos/public_bank.jpg') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/ambank"><center><img src="{{ asset('images/logos/ambank.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/agrobank"><center><img src="{{ asset('images/logos/agrobank.png') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/bankislam"><center><img src="{{ asset('images/logos/bankislam.jpg') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/bank_rakyat"><center><img src="{{ asset('images/logos/bank_rakyat.jpg') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/UOB_Bank"><center><img src="{{ asset('images/logos/UOB_Bank.jpg') }}" height="100px" width="80%" ></center></a>
                    </div>
                    <div class="col-xs-6 site-logos">
                        <a href="/Citibank"><center><img src="{{ asset('images/logos/Citibank.jpg') }}" height="100px" width="80%" ></center></a>
                    </div> -->
                </div>
                <div class="row hidden-lg hidden-md hidden-sm">
                    <div class="col-xs-6 footer-divs"><span class="footer-words">JENAYAH KOMERSIAL</span></div>
                    <div class="col-xs-6 footer-divs"><span class="footer-words">SEMAK AKAUN BANK</span></div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal part -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row vertical-offset-100">
                    <div class=" col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="logo" style="margin: auto;
                                width: 28%"><img src="{{ asset('assets/images/parallax/login_companyLogo.png')}}"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">Bank Management</h3>
                                    <h4 style="color:red; text-align:center">Please enter your username and password.</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="{{ route('login') }}" id="authentication" autocomplete="on" method="post" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                            <input class="form-control" placeholder="User Name" name="name" type="text"
                                                value="{!! old('email') !!}"/>
                                            <div class="help-block">
                                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                            <input class="form-control" placeholder="Password" name="password" type="password"/>
                                            <div class="help-block">
                                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input name="remember-me" type="checkbox" value="Remember Me" class="minimal-blue"/>
                                                Remember Me
                                            </label>
                                        </div>

                                        <input type="submit" value="Log in" class="btn btn-danger btn-block btn-lg" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- global js -->
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{ asset('assets/js/TweenLite.min.js') }}"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<!-- <script src="{{ asset('assets/js/pages/login2.js') }}" type="text/javascript"></script> -->
<!-- end of page level js-->
<script>
    $(document).ready(function(){
        $("#myModal").on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);  // Button that triggered the modal
            var titleData = button.data('title'); // Extract value from data-* attributes
            $(this).find('.modal-title').text(titleData + ' Form');
        });
    });
</script>
</body>
</html>


