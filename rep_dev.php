<?php
require_once 'lib.php';
$datos= consultaDetalle();

echo "<H1 align='center'> Reporte Detalle </H1>";

echo "<table border= '1' class='table table-hover'>";
echo "<td> IdVis </td>";
echo "<td> IdEven </td>";
echo "<td> eliminar </td>";

foreach ($datos as $key => $dev) {
	echo "<tr>";
	echo "<td>". $dev->IdVis. "</td>";
	echo "<td>". $dev->IdEven. "</td>";
    

	echo "<td><button class='btn btn-danger' onclick='eliminar({$dev->IdVis});'><span class='glyphicon glyphicon-trash'></button> 
			  <button class='btn btn-warning' onclick='mostrar({$dev->IdVis});'><span class='glyphicon glyphicon-pencil'></button>
			</td>";
	echo "</tr>";
}
echo"</table>";

?>