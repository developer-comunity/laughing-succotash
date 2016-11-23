<?php
require_once 'lib.php';
?>

<script src="bootstrap/js/jquery-1.12.3.js"></script>
<script>

	
	function guardar(){
		var NomVis= $('#NomVis').val();
		var ContraVis= $('#ContraVis').val();
		var Privilegio= $('#Privilegio').val();
		var CorreoVis= $('#CorreoVis').val();
		var LugarVis= $('#LugarVis').val();
		var EdadVis= $('#EdadVis').val();
		alert(NomVis+ContraVis+Privilegio+CorreoVis+LugarVis+EdadVis);
		$.post("save_visitante.php",
		{NomVis:NomVis, ContraVis:ContraVis, Privilegio:Privilegio, CorreoVis:CorreoVis, LugarVis:LugarVis, EdadVis:EdadVis},
		function(data){
			$("#reporte").html(data);
		});
	}
</script>
<table align="center">
		<tr>
			<input type="hidden" id="IdVis" name="IdVis" />
			
		<tr>
			<td>Nombre:</td>
			<td><input type="text" id="NomVis" name="NomVis"/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" id="ContraVis" name="ContraVis"/></td>
		</tr>
		<tr>
			<td>Privilegio:</td>
			<td><input type="text" id="Privilegio" name="Privilegio" value="1"/></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" id="CorreoVis" name="CorreoVis"/></td>
		</tr>
		
		
		<tr>
			<td>Lugar:</td>
			<td><input type="text" id="LugarVis" name="LugarVis"/></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><input type="text" id="EdadVis" name="EdadVis"/></td>
		</tr>
		
		
		<tr>
			
		</tr>
		<tr>
			<td colspan="2" align="center">
				<br></br>
				<button class='btn btn-success' onclick="guardar()" id="btnguardar" >Guardar</button>
				<button class='btn btn-primary' onclick="actualizar()" id="btnactualizar">Actualizar</button>
				<button class='btn btn-warning' onclick="cancelar()" id="btncancelar">Cancelar</button>	
			</td>
		</tr>
	