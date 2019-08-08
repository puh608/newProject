@extends('Layouts.Index')
<div class="container" style="width: 80%">
	<header class="navbar navbar-default">
		<div class="container-fluid nav-menu">
			<div class="navbar-header" style="padding: 10px 10px 10px 0px;">
				<img class="tv_icon" src="./img/tv_icon.png">
			</div>
			<div class="menu">
				<ul class="nav navbar-nav">
					<li style="    margin-top: -2px;">
						<img src="./img/mic_icon.png" style="position: absolute; margin-left: 15px; margin-top: 5px; height: 25px;">
						<input class="search" type="text" name="search" placeholder="What do you want to watch today?">
					</li>
					<li><a href="#">HOME</a></li>
					<li><a href="#">NETWORK</a></li>
					<li><a href="#">ONDEMAND</a></li>
					<li><a href="#">TV SHOWS</a></li>
					<li><a href="#">C POST</a></li>
					<li>
						<img src="./img/user.jpg" style="position: absolute; border-radius: 50px; height: 35px;">
						<a href="#" style="padding-left: 40px;">Username</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="container-fluid content" style="clear: both;">
		<div class="row form_control">
			<div>
				<label>Change Platform</label>
				<input type="text" name="change_platform" placeholder="Current selected platform name">
			</div>
			<div>
				<label>Select your ads time</label>
				<input type="text" name="ads_time" placeholder="0 to 15">
			</div>
			<div>
				<label>Your ads Budget will be</label>
				<input type="text" name="ads_budget" placeholder="$5 ~ $60">
			</div>
			<div>
				<label>When do you want the ads to run</label>
				<input type="text" name="ads_date" placeholder="Select the date you want to run your ads">
			</div>
			<div>
				<label>Ads files</label>
				<input type="button" name="upload_ads" value="Upload ads files" style="background: #fa363c; color: white;">
			</div>
			<div>
				<img>
				<p>Video Uploaded</p>
			</div>
		</div>
		<div class="row">
			<div class="payment">
				<input class="payment_btn" type="button" name="payment_btn" value="PAYMENT & SUBMITTION">
			</div>
		</div>
		<div class="row">
			<div class="payment_btn_group">
				<!-- <input type="button" name="craveo_account" value="PAY WITH MY CRAVEO ACCOUNT"> -->
				<div><p align="center" style="padding: 5px 3px 5px 3px">PAY WITH MY CRAVEO ACCOUNT</p></div>
				<!-- <input type="button" name="paypal" value="PayPal"> -->
				<div><p align="center" style="padding: 20px 10px 10px 10px">PayPal</p></div>
				<!-- <input type="button" name="credit" value="CREDIT or DEBIT"> -->
				<div><p align="center" style="padding: 20px 10px 10px 10px">CREDIT & DEBIT</p></div>
			</div>
		</div>
		<div class="row">
			<div class="review_ads">
				<center><input type="button" name="review_ads" value="SUBMIT ADS REVIEW FOR REVIEW"></center>
			</div>
		</div>
		<div class="row">
			<p style="color: red; padding: 30px 50px 90px 50px; font-size: 20px;">
				NOTES: All ads most be in MP4 when submitting for review. Not all ads that get submitted on this page will be approve, if your ads did not get approve you will receive an email with the reason why it did not get approve and for you to fix it and resubmit it. All funding will get back to your banks institution that you selected, if your ads did not get approve, Once ads get submitted for a review funding will comes out from that institution that you selected immediately. (SOME ADS FROM THIRD PARTY SERVER WILL ALSO BE SHOWING ON ONE OF OUR CHANNELS.)
			</p>
		</div>
	</div>
	<footer class="container-fluid">
		<div class="row">
			<div class="col-sm-3" style="margin: 10px 10px 10px 20px">
				<img class="tv_icon" src="./img/tv_icon.png">
				<div>
					<p class="footer_content" style="color: white; font-size: 17px;">Our mission is to introduce the World
					to each other culture. We gives the people
					(Which is you) the power of watching TV
					with out limited, watch contents from around
					the World such as TV Shows, Movies, and Music
					Videos even by streaming or watching it LIVE.</p>
				</div>
			</div>
			<div class="col-sm-3">
				<p class="footer_titles">Categories</p>
				<ul class="footer_content" style="float: left;">
					<li><a href="#">Animation</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Trailers</a></li>
					<li><a href="#">Comedy</a></li>
					<li><a href="#">How-to & DIY</a></li>
					<li><a href="#">Tech</a></li>
				</ul>
				<ul class="footer_content" style="float: right;">
					<li><a href="#">Movies</a></li>
					<li><a href="#">TV Shows</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Cooking & Health</a></li>
					<li><a href="#">Lifestyle</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<p class="footer_titles">Post Categories</p>
				<ul class="footer_content" style="float: left;">
					<li><a href="#">News</a></li>
					<li><a href="#">Entertainment News</a></li>
					<li><a href="#">Birthday</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<p class="footer_titles">Links</p>
				<ul class="footer_content" style="float: left;">
					<li><a href="#">Networks</a></li>
					<li><a href="#">Advertisement</a></li>
					<li><a href="#">Career Opportunities</a></li>
					<li><a href="#">Privacy Policy and Terms</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Sign In</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</div>
		</div>
		<div class="row" style="background: #5d5d5d; color: white; padding: 10px 0px 10px 0px; font-size: 15px;">
			<p align="center">Copyright@2015-2017 Craveo Television</p>
		</div>
	</footer>
</div>