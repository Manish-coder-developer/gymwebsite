<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "college";

$conn = mysqli_connect($servername,$username,$password,$dbName);
if($conn){
	echo "succesfully";
}
else{
	die("Unsucessful" . mysqli_connect_error());
}


?>