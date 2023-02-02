<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db_name = "users";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
	  die("connection failed" .$conn->connect_error);
}
echo "";

?>