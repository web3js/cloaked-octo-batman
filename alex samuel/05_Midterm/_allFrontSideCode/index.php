<html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="js/fingerprint.js"></script>
<script src="js/spin.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/dojo/1.9.2/dojo/dojo.js"></script>


<script src="js/main.js"></script>
<script src="js/articleObj.js"></script>
<script src="js/navObj.js"></script>
<script src="js/socObj.js"></script>
<script src="js/trObj.js"></script>

<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Allerta' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style/normalize.min.css">
<link rel="stylesheet" href="style/main.css">

</head>

<body>




<div class ="landing">
	<?php include 'lib/landing.php'; ?>
</div>


<div class="social">
	<?php include 'lib/soc/ip_loginform.php'; ?>
</div>


<div id="blur"></div>

	<!-- header -->
	<div class="logo">
		<h1>BDGA</h1>
	</div>
	
	<!-- navbar -->
	<div class="nav">
			<?php include 'lib/nav.php'; ?>
			<div id="loading_feed"></div>
			<div id="searchbar"><p id="icon">&#xf002;</p><input id="searchval" name="searchval" autocomplete="on"></div>
	</div>
	
	
	<section class="body">
	
		<!-- reader -->
		<div class="reader">
			<div class="readerclose">x</div>
			<div class="readerhead"></div>
			<div class="readerkeys"></div>
			<div class="readerimg"></div>
			<div class="readerbody"></div>
		</div>  
	
		<!-- sidebar -->
		<div class = "readersidebarWrapper">
			<div class ="readersidebar">
				
				<div id="shownews-active"><img src="style/img/paper.png"></div>
				<div id="showtwitter"><img src="style/img/pound.png"></div>
				
				<!-- feed -->
				<section class="newsWrapper-active">	
					<div class="newsFeed">					
						<ul id="articleList">
							<li class="template"> <h2></h2><h1>head</h1> </li>
						</ul>
					</div>
				</section>
				
				<!-- twitter -->
				<section class="twitterWrapper">	
					<div class="twitterFeed">					
						<ul id="tweetList">
							<li class="template"> <h2></h2><h1></h1></li>				
						</ul>
					</div>
				</section>
		
				
			</div>
		</div>
	</section>
</body>