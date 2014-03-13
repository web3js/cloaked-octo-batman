
<?php


// Connect To Server
$username = "alex";
$password = "sql11222";
$db = "main";
$sql = $_GET["sql"];

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
	  
	  	$model[$i]['storyID']	= $row[0];  
	  	$model[$i]['pub']		= $row[1];
	  	$model[$i]['head'] 		= $row[2];
	  	$model[$i]['dek'] 		= $row[3];
	  	$model[$i]['storyURL'] 	= $row[4];
	  	$model[$i]['date'] 		= $row[5];
	  	$model[$i]['time'] 		= $row[6];
	   	$model[$i]['img'] 		= $row[7];
	   	$model[$i]['body'] 		= $row[8];
	   	$model[$i]['keywords'] 	= $row[9];
	   	
	
		$i++;
	
	}
	
	echo json_encode($model);

};

mysqli_close($con);

?>