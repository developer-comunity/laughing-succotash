<?php
require_once 'lib.php';
$datos= consultaVisitante();

echo "<H1 align='center'> Reporte Visitantes </H1>";

echo "<table border= '1' class='table table-hover'>";
echo "<td> IdVIs </td>";
echo "<td> NomVis </td>";
echo "<td> ContraVis </td>";
echo "<td> Privilegio </td>";
echo "<td> CorreoVis </td>";
echo "<td> LugarVis </td>";
echo "<td> EdadVis </td>";
echo "<td> FechaVis </td>";
echo "<td> eliminar </td>";

foreach ($datos as $key => $visitante) {
	echo "<tr>";
	echo "<td>". $visitante->IdVis. "</td>";
	echo "<td>". $visitante->NomVis. "</td>";
	echo "<td>". $visitante->ContraVis. "</td>";
	echo "<td>". $visitante->Privilegio. "</td>";
	echo "<td>". $visitante->CorreoVis. "</td>";
	echo "<td>". $visitante->LugarVis. "</td>";
	echo "<td>". $visitante->EdadVis. "</td>";
    echo "<td>". $visitante->FechaVis. "</td>";

	echo "<td><button class='btn btn-danger' onclick='eliminar({$visitante->IdVis});'><span class='glyphicon glyphicon-trash'></button> 
			  <button class='btn btn-warning' onclick='mostrar({$visitante->IdVis});'><span class='glyphicon glyphicon-pencil'></button>
			</td>";
	echo "</tr>";
}
echo"</table>";

?>