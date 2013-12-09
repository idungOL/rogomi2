<?php
$title = 'About';
include('include/header.php');

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
require_once('config.php');
require_once('functions.php');

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=rogomiapps&count=10';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$twits = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest());

  $rogomierr = false;
  if ($twits){
    $rogomi_tweets = $twits;
  }
  else{
    $rogomierr = true;
  }
  
  

?>
<div id="body">
	<div id="image">
		<div id="phrase">
			<p>We've developed and successfully published <span class="emphasize">mobile apps</span> for enterprises, from 
			<span class="emphasize">startups</span> <br>to the world's largest <span class="emphasize">global brands</span>.</p>
			<p><span id="portfolio"><br><a href="apps.php">See our portfolio</a></span></p>
		</div>
	</div>
	
	<div id="bottomPanel">
	
		<div id="hello">
		
			<img src="img/About/Hello_Text.png">
			
			<div id="imageFrame">
				<img src="img/About/sample.png">
			</div>
			
			<div id="helloContent">
			
				<p>Rogomi, Inc. (formerly Numlock Solutions Co.) is a Philippine-based corporation which commenced operations in 2009 and is focused on enabling enterprises to tap the power of mobile technologies through iPhone, iPad or Android applications. From a three-man startup developing and releasing mobile applications under its own brand, the company moved to its current office and started designing and developing custom mobile applications for enterprises in November 2010. With a current team of 11 mobile developers and designers, it has helped enterprises, from startups to some of the world's leading global companies, plan, design, develop, test and publish mobile applications.</p><br>
				<p>Prior to August 2013, Rogomi had been successfully launching its own in-house apps on the App Store and Google Play. The company's first iOS app, WalletWhiz, was released on the Apple App Store in May 2009 as the first budget calendar for the iPhone and its first Android app, StreetSmart, won the Globe Telecom Challenge for Android in August 2010. MindMash was the first Philippine-made app for the iPad listed on the App Store in April 1, 2010.</p><br>
				<p>In August 2013, the company dissolved Numlock Solutions Co. as a partnership and incorporated a new company named Rogomi, Inc. to take over its operations and to focus solely on helping enterprises successfully publish and launch their own mobile applications.</p><br>
				<p>Rogomi's principal office is located at 909 One Corporate Centre, Do&ntilde;a Julia Vargas Ave. corner Meralco Ave., Ortigas Center, Pasig City 1605 Philippines.</p><br>
				<p>The company has one satellite office located at 2/F Lucky Plaza Bldg., Burgos St., La Paz, Iloilo City 5000 Philippines.</p><br>
								
			</div>
			
			
		</div>
		
		<div id="tweets">
			<img src="img/About/Tweets_Text.png">
			
			<div id="twits">
				<ul>
				<?php
					if ($rogomierr) echo "Ooops! We're having trouble contacting Twitter.";
					else{
						date_default_timezone_set("Asia/Manila");
						?>
						<div class="numlockph_tweets">
						                              
							<?php
							foreach ($rogomi_tweets as $tweet ){ ?>
								<li>
								<?php echo linkify("{$tweet->text}\n");
								?>
								<br><span class="numlockph_tweets_createat"><?php
								echo date('h:i:s A M d, Y', strtotime($tweet->created_at));
								?></span>
								</li>
							<?php 
							} ?>
							
						</div>
					<?php
					}
					?>
				</ul> 			
			</div>
			
		</div>
		
		<div id="leadership">
			<img src="img/About/Leadership_Text.png">
			<div id="leadBody">		
					<div id="ramon" class="lead">
						<p>Ramon Pastor, <span>President & CEO</span></p>
						<p><a href=" https://twitter.com/filjedi" target="_blank"><img src="img/About/Twitter.png"></a>
							<a href="http://www.linkedin.com/in/rcpastor" target="_blank"><img src="img/About/LinkedIn.png"></a>
							<a href="https://plus.google.com/112176505977369831450/posts" target="_blank"><img src="img/About/Google+.png"></a></p>
					</div>
					<div id="mai" class="lead">
						<p>Myrha Ladanga, <span>Chief Operations Officer</span></p>
						<p><a href="https://twitter.com/maidapaypay" target="_blank"><img src="img/About/Twitter.png"></a>
						<a href="http://www.linkedin.com/in/myrha" target="_blank"><img src="img/About/LinkedIn.png"></a>
						<a href="https://plus.google.com/106407058681021994747/posts" target="_blank"><img src="img/About/Google+.png"></a></p>
					</div>
					<div id="glenda" class="lead">
						<p>Glenda Pastor, <span>Chief Financial Officer</span></p>
						<p><a href="https://twitter.com/filpadme" target="_blank"><img src="img/About/Twitter.png"></a>
						<a href="http://www.linkedin.com/in/gppastor" target="_blank"><img src="img/About/LinkedIn.png"></a>
						<a href="https://plus.google.com/108241128404412025425/posts" target="_blank"><img src="img/About/Google+.png"></a></p>
					</div>
			</div>
			
		</div>

		
	</div>
	
	
</div>

<?php

include('include/footer.php');

?>