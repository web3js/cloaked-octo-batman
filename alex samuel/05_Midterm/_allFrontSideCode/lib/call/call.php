
<?php
ini_set('display_errors', 'On');

//phpinfo(); 



// Connect To Server
$username = "alex";
$password = "sql11222";
$db = "main";
/*$sql = $_GET["sql"];*/
$sql = "SELECT hed FROM user"; 

/* $sql = "INSERT INTO user (date, time, finger, geoLat, geoLon, geoNabe, geoName) VALUES ('2014-01-21', '18:06:23', '4294548156', '40.731074799999995', '-73.9585622', 'greenpoint', 'home')"; */


$con=mysqli_connect("localhost",$username,$password,$db);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);

var_dump($result);

//if there is no array, show boolean (1 = post succes, 0 = error). else, show returned array.
if (is_null($array)){
	echo $result;
}else{
	var_dump($array);
};


mysqli_close($con);

?>