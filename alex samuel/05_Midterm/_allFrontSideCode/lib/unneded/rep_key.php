<?php

// Connect To Server
$username = "**********";
$password = "**********";
$db = "**********";
$sql = $_GET["sql"];
/* $sql = "SELECT * FROM user"; */
/* $sql = "INSERT INTO user (date, time, finger, geoLat, geoLon, geoNabe, geoName) VALUES ('2014-01-21', '18:06:23', '4294548156', '40.731074799999995', '-73.9585622', 'greenpoint', 'home')"; */


$model  = array();

$con=mysqli_connect("localhost",$username,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result); 

$i = 0;

while ($row = mysqli_fetch_array($result)){
    
    $model[$i]['story_url']	= $row['0'];
    $model[$i]['body']	= $row['2'];
	
	$i++;

}



echo json_encode($model);



mysqli_close($con);

?>
