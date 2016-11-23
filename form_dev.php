<?php
require_once 'lib.php';
?>

<script src="bootstrap/js/jquery-1.12.3.js"></script>
<script>

	
	function guardar(){
		var IdVis= $('#IdVis').val();
		var IdEven= $('#IdEven').val();
		alert(IdVis+IdEven);
		$.post("save_dev.php",
		{IdVis:IdVis, IdEven:IdEven},
		function(data){
			$("#reporte").html(data);
		});
	}
</script>
<table align="center">
		<tr>
			<input type="hidden" id="" name="" />
			
		<tr>
			<td>IdVis:</td>
			<td><input type="text" id="IdVis" name="IdVis"/></td>
		</tr>
		<tr>
			<td>IdEven:</td>
			<td><input type="text" id="IdEven" name="IdEven"/></td>
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
</table>