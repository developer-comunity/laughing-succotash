<?php
$savername ="localhost";
$username = "root";



$conn = new mysqli($savername, $username);

if ($conn -> connect_error){
	die("connection failed: " . $conn -> connect_error);

}


mysqli_select_db($conn, "turismo");

?>