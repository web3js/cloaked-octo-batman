<?php

// Connect To Server
$username = "**********";
$password = "**********";
$db = "**********";
$sql = $_GET["sql"];
/* $sql = "SELECT * FROM user"; */
/* $sql = "INSERT INTO user (date, time, finger, geoLat, geoLon, geoNabe, geoName) VALUES ('2014-01-21', '18:06:23', '4294548156', '40.731074799999995', '-73.9585622', 'greenpoint', 'home')"; */


$con=mysqli_connect("localhost",$username,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);

var_dump($array);

mysqli_close($con);

?>
