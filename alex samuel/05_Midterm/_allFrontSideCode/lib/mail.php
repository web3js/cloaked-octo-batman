<?php

$to = $_GET[to];
$fromName = $_GET[fromName];
$from = $_GET[from];
$message = $_GET[message];
$title = $_GET[title];
$url = $_GET[url];

$subject = $fromName . ' thought you might like this article from Bodeg.ga.' ;
$messageBody = $message . '  <br><br> --- <br><br><a href="' .$url .'">' . $title . '</a>';
$headers = "From:" . $from . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


mail($to,$subject,$messageBody,$headers);
echo "Mail Sent.";


?>
