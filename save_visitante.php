<?php
require_once 'lib.php';

$NomVis=$_POST['Nombre'];
$ContraVis=md5($_POST['Contrasena']);

$CorreoVis=$_POST['Correo'];
$LugarVis=$_POST['Lugar'];
$EdadVis=$_POST['Edad'];



guardar_Visitante($NomVis, $ContraVis, $CorreoVis, $LugarVis, $EdadVis);


?>