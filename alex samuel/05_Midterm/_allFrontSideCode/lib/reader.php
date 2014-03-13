
<?php
	$url = $_GET['url']; 
	$html = file_get_contents($url);
	var_dump($html);

/* echo 'This is a test'; */
?>
