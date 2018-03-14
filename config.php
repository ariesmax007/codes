<?php
$connection = mysqli_connect('localhost','root','','max');
//check connection
if($connection->connect_error){
	die("connection failed:".$connection->connect_error);
}


?>
