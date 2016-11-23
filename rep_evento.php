<?php
require_once 'lib.php';
$datos= consultaEvento();

echo "<H1 align='center'> Reporte Eventos </H1>";

echo "<table border= '1' class='table table-hover'>";
echo "<td> IdEven </td>";
echo "<td> NomEven </td>";
echo "<td> TipoEven </td>";
echo "<td> LugarEven </td>";
echo "<td> FechaEven </td>";
echo "<td> HoraEven</td>";
echo "<td> DescriEven </td>";
echo "<td> eliminar </td>";

foreach ($datos as $key => $evento) {
	echo "<tr>";
	echo "<td>". $evento->IdEven. "</td>";
	echo "<td>". $evento->NomEven. "</td>";
	echo "<td>". $evento->TipoEven. "</td>";
	echo "<td>". $evento->LugarEven. "</td>";
	echo "<td>". $evento->FechaEven. "</td>";
	echo "<td>". $evento->HoraEven. "</td>";
	echo "<td>". $evento->DescriEven. "</td>";
    

	echo "<td><button class='btn btn-danger' onclick='eliminar({$evento->IdEven});'><span class='glyphicon glyphicon-trash'></button> 
			  <button class='btn btn-warning' onclick='mostrar({$evento->IdEven});'><span class='glyphicon glyphicon-pencil'></button>
			</td>";
	echo "</tr>";
}
echo"</table>";

?>