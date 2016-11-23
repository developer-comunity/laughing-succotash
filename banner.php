<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Turismo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
 
  <!--Carousel -->
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <script type="text/javascript">
function aContra()
{
  $('#mContra').modal('toggle');
  $('#mContra').modal('show');
}

</script>

  </script>

<script>
function guardar(){
var NomVis = $('#Nombre').val();
var ContraVis = $('#Contrasena').val();
var CorreoVis = $('#Correo').val();
var LugarVis = $('#Lugar').val();
var EdadVis = $('#Edad').val();
alert(NomVis+ContraVis+CorreoVis+LugarVis+EdadVis);
$.post("save_visitante.php",
  {Nombre:NomVis, Contrasena:ContraVis, Correo:CorreoVis, Lugar:LugarVis, Edad:EdadVis},
  function(data){
    $("#reporte").html(data);
    $("#Nombre").val("");
    $("#Contrasena").modal('toggle');
    $("#Correo").val("");
    $("#Lugar").val("");
    $("#Edad").val("");
   
  });

}





</script>






  

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Interes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="municipios2.html">Municipios</a></li>
          <li><a href="lugar2.html">Lugares Turisticos</a></li>
          <li><a href="hoteles.html">Hoteles</a></li> 
        </ul>
      </li>
      <li><a href="#">Eventos</a></li> 
      <li><a href="#">Calendario</a></li> 
      <li><a href="#">Cupones</a></li> 
      
    </ul>
    
       <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
          <a href="#" class="glyphicon glyphicon-cog dropdown-toggle" data-toggle="dropdown"><b></b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
               
                             
       <form class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
                    
                    <div class="form-group">
                       <a href="salir.php" class="btn btn-default btn-block">Cerrar Sesion</a>
                    </div>
                    <div class="checkbox">
                       
                    </div>
                 </form>     </div>
              <div class="bottom text-center">
               
              </div>
           </div>
      </ul>

    </div><!-- /.navbar-collapse -->
    </ul>

  </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        
</nav>