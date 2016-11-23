<?php
require_once 'conexion.php';
session_start();
$ContraVis=md5($_POST['tPassword']);
$CorreoVis=$_POST['tEmail'];
$query="SELECT * FROM visitante where CorreoVis='$CorreoVis' and ContraVis='$ContraVis' ";
global $conn;
$result=mysqli_query($conn, $query);
$CorreoVis=mysqli_fetch_object($result);
if($CorreoVis->Privilegio == 1){
	echo "Acceso Correcto";
	$_SESSION['tEmail']=$CorreoVis;
	header("Location: visitante.html");
}
elseif($CorreoVis->Privilegio == 2){
	echo "Acceso Correcto";
	$_SESSION['tEmail']=$CorreoVis;
	header("Location: admin.html");
}
else{
	echo "Acceso Denegado";
	header("Location: index.html");
}

?>