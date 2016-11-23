<?php
require_once 'conexion.php';

$tabla= "";

global $conn;

$query="SELECT * FROM cupones order by IdCup ";

$consulcup=mysqli_query($conn, $query);

while($ver=mysqli_fetch_array($consulcup)){

$IdCup=$ver['IdCup'];
$CodCup=$ver['CodCup'];
$InfCup=$ver['InfCup'];


$quitar = '<a title=\"Eliminar\" href=\"#\" onclick=\"baja('.$ver['IdCup'].')\"><i class=\"glyphicon glyphicon-remove\"></i></a>';

$modificar = '<a title=\"Modificar\" href=\"#\" onclick=\"modificar('.chr(39).$ver['IdCup'].chr(39).",".chr(39).$ver['CodCup'].chr(39).",".chr(39).$ver['InfCup'].chr(39).')\"><i class=\"glyphicon glyphicon-pencil\"></i></a>';

$tabla.='{"CodCup":"'.$ver['CodCup'].'","InfCup":"'.$ver['InfCup'].'","hacer":"'.$modificar."&nbsp".$quitar.'"},';


}

$tabla=substr($tabla, 0, strlen($tabla) - 1);
echo '{"data":['.$tabla.']}';
?>
