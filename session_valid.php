<?php
session_start();

if(isset($_SESSION['tEmail'])){
	$CorreoVis=$_SESSION['tEmail'];
}
else {
	header("Location: visitante.html");
}
'print_r ($CorreoVis);'
?>