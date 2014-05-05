
<?php


// Connect To Server
$username = "alex";
$password = "sql11222";
$db = "main";
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


//if there is no array, show boolean (1 = post succes, 0 = error). else, show returned array.

if (is_null($array)){

	echo $result;

}else{

	$i = 0;
	while ($row = mysqli_fetch_array($result)){
	  
	  	$model[$i]['date']		= $row[0];  
	  	$model[$i]['time']		= $row[1];
	  	$model[$i]['finger'] 	= $row[2];
	  	$model[$i]['geoLat'] 	= $row[3];
	  	$model[$i]['geoLon'] 	= $row[4];
	  	$model[$i]['geoNabe'] 	= $row[5];
	  	$model[$i]['geoName'] 	= $row[6];
	   	$model[$i]['geoType'] 	= $row[7];
	   	$model[$i]['keysTop'] 	= $row[8];
	   	$model[$i]['keysFeed'] 	= $row[9];
	   	$model[$i]['keysArt'] 	= $row[10];
	   	$model[$i]['urlArt'] 	= $row[11];
	   	$model[$i]['pub'] 		= $row[12];
	   	$model[$i]['ct'] 		= $row[13];
	   	$model[$i]['nameArt']	= $row[14];
	
		$i++;
	
	}
	
	echo json_encode($model);

};

mysqli_close($con);

?>