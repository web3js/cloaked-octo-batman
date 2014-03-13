<html class="no-js">
<head>
    <script>window.jQuery || document.write('<script src="vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <!-- <script src="lib/main.js"></script> -->
    <script src="news.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>   
    

<?php
	$html = file_get_contents("http://www.nydailynews.com/sports/baseball/index_rss.xml");
	//$html = json_encode($html);
	var_dump($html);
?>

</body>