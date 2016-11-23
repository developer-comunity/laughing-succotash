

	
	function guardar(){
		var NomEven= $('#NomEven').val();
		var TipoEven= $('#TipoEven').val();
		var LugarEven= $('#LugarEven').val();
		var FechaEven= $('#FechaEven').val();
		var HoraEven= $('#HoraEven').val();
		var DescriEven= $('#DescriEven').val();
		alert(NomEven+TipoEven+LugarEven+FechaEven+HoraEven+DescriEven);
		$.post("save_evento.php",
		{NomEven:NomEven, TipoEven:TipoEven, LugarEven:LugarEven, FechaEven:FechaEven, HoraEven:HoraEven, DescriEven:DescriEven},
		function(data){
			$("#reporte").html(data);
		});
	}
 function mostrar(){

$('#mGuardar').modal('toggle');
  $('#mGuardar').modal('show');

 }