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

$quitar = '<a title=\"Eliminar\" href=\"#\" onclick=\"eliminar('.$ver['IdEven'].')\"><i class=\"glyphicon glyphicon-remove\"></i></a>';

$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificar('.chr(39).$ver['IdEven'].chr(39).",".chr(39).$ver['NomEven'].chr(39).",".chr(39).$ver['TipoEven'].chr(39).",".chr(39).$ver['LugarEven'].chr(39).",".chr(39).$ver['FechaEven'].chr(39).",".chr(39).$ver['HoraEven'].chr(39).",".chr(39).$ver['DescriEven'].chr(39).')\"><i class=\"glyphicon glyphicon-pencil\"></i></a>';



$tabla.='{"NomEven":"'.$ver['NomEven'].'","TipoEven":"'.$ver['TipoEven'].'",
         "LugarEven":"'.$ver['LugarEven'].'","FechaEven":"'.$ver['FechaEven'].'","HoraEven":"'.$ver['HoraEven'].'",
         "DescriEven":"'.$ver['DescriEven'].'","hacer":"'.$modificar."&nbsp".$quitar.'"},';


}

$tabla=substr($tabla, 0, strlen($tabla) - 1);
echo '{"data":['.$tabla.']}';
?>



