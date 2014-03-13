
<?php

// Connect To Server
$username = "alex";
$password = "sql11222";
$db = "main";
$sql = $_GET["sql"];
$url = $_GET["url"];



$con=mysqli_connect("localhost",$username,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);

//var_dump($array);



if (is_null($array)){

	echo 0;
/* 	(this story url is unique) */

}else{

	echo $url;
/* 	(this story url is not unique) */

};






mysqli_close($con);

?>