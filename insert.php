<?php   
include 'conn.php';
$sql = "INSERT into 'gymsite'('Name','Age','Gender','Phone','Email','Address') Values('Manish',19,'Male',9326033562,'manishshah3763@gmail.com','flat no 101,phase D3,Deeplaxmi Residency')";
$query = mysqli_query($conn,$sql)
if($query){
echo "Sucessful";
}
else{
	echo "Unsucessful";
}


?>