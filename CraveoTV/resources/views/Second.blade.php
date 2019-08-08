@extends('Layouts.Index')
<script type="text/javascript" src="{{ URL::asset('js/zingchart.min.js') }}"></script>
<div class="container" style="width: 80%">
	<header class="navbar navbar-default">
		<div class="container-fluid nav-menu">
			<div class="navbar-header" style="padding: 10px 10px 10px 0px;">
				<img class="tv_icon" src="./img/tv_icon.png">
			</div>
			<div class="menu">
				<ul class="nav navbar-nav">
					<li style="margin-top: -2px;">
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
			<div style="background: #767e91; padding: 5px 0px 5px 0px;"><p align="center" style="font-size: 25px; font-weight: bold; color: white;">ADS MANAGEMENT</p></div>
		</div>
		<div class="row sd_management">
			<div class="total_budget">
				<label style="display: block;">Your total Budget</label>
				<input type="text" name="total_budget" placeholder="$130.95">
			</div>
			<div class="spend_money">
				<label style="display: block;">You have spend</label>
				<input type="text" name="spend_money" placeholder="$23.71">
			</div>
			<div class="pause_all_btn">
				<input type="button" name="spend_money" value="Pause all ads">
			</div>
		</div>
		<div class="row">
			<div class="charts_row">
				<div id='line_chart' class="line_chart" style="width: 400px; height: 300px;"></div>
				<div id='pie_chart' class="pie_chart" style="width: 400px; height: 300px;"></div>
				<script>
				    var lineData = {
						"type": "line",
						"plotarea": {
							"adjust-layout":true /* For automatic margin adjustment. */
						},
						"series": [ 
							{"values":[10,20,40,25]}, 
							{"values":[20,45,30,29]},
						],
						"scale-x": {
							"labels": ["48 hours ago", "24 hours ago", "12 hours ago", "Now"]
						},
						"scale-y": {
							"min-value":0, 
    						"max-value":100,
    						"step": 25
    					}
				    };

				    zingchart.render({
				    	id: "line_chart",
				    	data: lineData,
				    	height: "250px",
				    	width: "450px"
				    });

				    var pieData = {
				    	"type": "pie",
				    	"title": {
				    		"text":"Pie Chart"
				    	},
				    	"series": [
				    		{ "values": [35] },
				    		{ "values": [29] },
				    		{ "values": [11] },
				    		{ "values": [10] },
				    		{ "values": [8] },
				    		{ "values": [7] }
				    	]
				    };	

				    zingchart.render({
				    	id: "pie_chart",
				    	data: pieData,
				    	height: "250px",
				    	width: "450px"
				    });
				</script>
			</div>
		</div>
		<div class="row">
			<div style="background: #a4f842; padding: 15px 0px 15px 0px;"><p align="center" style="font-size: 25px; font-weight: bold; color: white;">YOUR ADS LIST</p></div>
		</div>
		<div class="row">
			<div class="ads_list">
				<div class="ads_item">
					<img>
					<ul>
						<li><span>ADS 1</span><p>Seen: 0</p></li>
						<li><span>Platform:</span><p>Craveo TV</p></li>
						<li><span>Date Created:</span><p>7/11/17</p></li>
					</ul>
					<ul>
						<li><span>Budget:</span><p>$5 to $60</p></li>
						<li><span>Run Date:</span><p>7/12/17</p></li>
						<li><span>Status:</span></li>
					</ul>
				</div>
				<div class="ads_item">
					<img>
					<ul>
						<li><span>ADS 2</span><p>Seen: 0</p></li>
						<li><span>Platform:</span><p>Craveo TV</p></li>
						<li><span>Date Created:</span><p>7/11/17</p></li>
					</ul>
					<ul>
						<li><span>Budget:</p><p>$5 to $60</p></li>
						<li><span>Run Date:</span><p>7/12/17</p></li>
						<li><span>Status:</span></li>
					</ul>
				</div>
				<div class="ads_item">
					<img>
					<ul>
						<li><span>ADS 3</span><p>Seen: 0</p></li>
						<li><span>Platform:</span><p>Craveo TV</p></li>
						<li><span>Date Created:</span><p>7/11/17</p></li>
					</ul>
					<ul>
						<li><span>Budget:</span><p>$5 to $60</p></li>
						<li><span>Run Date:</span><p>7/12/17</p></li>
						<li><span>Status:</span></li>
					</ul>
				</div>
				<center><input type="button" name="create_ads" class="create_ads" value="Create new ads"></center>
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