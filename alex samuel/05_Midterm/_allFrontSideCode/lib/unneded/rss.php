
<?php

// Connect To Server
$username = "alex";
$password = "sql11222";
$db = "main";
$sql = $_GET["sql"];
/* $sql = "SELECT * FROM user"; */

echo $sql . '<br>';

$model  = array();

$con=mysqli_connect('localhost',$username,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result = mysqli_query($con, $sql);
/* $array = mysqli_fetch_array($result); */
echo $result;

$i = 0;
while ($row = mysqli_fetch_array($result)){
    
    $model[$i]['call']	= $row['0'];
    $model[$i]['key']	= $row['4'];
    $model[$i]['feed']	= $row['1'];
    $model[$i]['url']	= $row['5'];
	$i++;

}


echo json_encode($model);



mysqli_close($con);

?>