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
		<div class="row">
			<div style="background: #767e91; padding: 5px 0px 5px 0px;"><p align="center" style="font-size: 25px; font-weight: bold; color: white;">Terms and Policy</p></div>
		</div>
		<div class="row sub_menu">
			<ul>
				<li><a href="#">OverView</a></li>
				<li class="active"><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Sevice</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Our Story</a></li>
				<li><a href="#">Career</a></li>
			</ul>
		</div>
		<div class="row privacy_policy">
			<div style="float: left; width: 30%;">
				<p class="title">Privacy Policy</p>
				<p>Information we collect</p>
				<p>How we use information we collect</p>
				<p>Transparency and choice</p>
				<p>Information you share</p>
				<p>Accessing and updating your personal information</p>
				<p>Information we share</p>
				<p>Information security</p>
				<p>When this Privacy Policy applies</p>
				<p>Compliance and cooperation with regulatory authorities</p>
				<p>Changes</p>
				<p>Specific product practices</p>
				<p>Other useful privacy and security related materials</p>
				<p>Self Regulatory Frameworks</p>
				<p>Key terms</p>
				<p>Partners</p>
				<p>Updates</p>
			</div>
			<div style="float: left; width: 70%;">
				<p class="description">
					Welcome to the Craveo Television Privacy Policy
					When you use Craveo services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. This is important; we hope you will take time to read it carefully. And remember, you can find controls to manage your information and protect your privacy and security at My Account.
				</p>
			</div>
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