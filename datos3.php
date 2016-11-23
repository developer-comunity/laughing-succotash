<?php
require_once 'conexion.php';

$tabla= "";

global $conn;

$query="SELECT * FROM evento order by IdEven ";

$consuleven=mysqli_query($conn, $query);

while($ver=mysqli_fetch_array($consuleven)){

$IdEven=$ver['IdEven'];
$Nombre=$ver['NomEven'];
$Tipo=$ver['TipoEven'];
$Lugar=$ver['LugarEven'];
$Fecha=$ver['FechaEven'];
$Hora=$ver['HoraEven'];
$Descri=$ver['DescriEven'];



$tabla.='{"NomEven":"'.$ver['NomEven'].'","TipoEven":"'.$ver['TipoEven'].'",
         "LugarEven":"'.$ver['LugarEven'].'","FechaEven":"'.$ver['FechaEven'].'","HoraEven":"'.$ver['HoraEven'].'",
         "DescriEven":"'.$ver['DescriEven'].'"},';


}

$tabla=substr($tabla, 0, strlen($tabla) - 1);
echo '{"data":['.$tabla.']}';
?>