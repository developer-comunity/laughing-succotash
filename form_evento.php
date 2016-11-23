<?php
require_once 'lib.php';
?>

<script src="bootstrap/js/jquery-1.12.3.js"></script>

<table align="center">
		<tr>
			<input type="hidden" id="IdEven" name="IdEven" />
			
		<tr>
			<td>Nombre:</td>
			<td><input type="text" id="NomEven" name="NomEven"/></td>
		</tr>
		<tr>
			<td>Tipo:</td>
			<td><input type="text" id="TipoEven" name="TipoEven"/></td>
		</tr>
		<tr>
			<td>Lugar:</td>
			<td><input type="text" id="LugarEven" name="LugarEven"/></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type="date" id="FechaEven" name="FechaEven"/></td>
		</tr>
		<tr>
			<td>Hora:</td>
			<td><input type="time" id="HoraEven" name="HoraEven"/></td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><input type="text" id="DescriEven" name="DescriEven"/></td>
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
	