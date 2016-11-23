<?php
require_once 'conexion.php';

/*Visitante  */
function guardar_Visitante($NomVis, $ContraVis, $CorreoVis, $LugarVis, $EdadVis){
	global $conn;
	 $Privilegio=1;
	$query= "INSERT INTO visitante ( NomVis, ContraVis, Privilegio, CorreoVis, LugarVis, EdadVis)
			VALUES ( '$NomVis', '$ContraVis', '$Privilegio', '$CorreoVis', '$LugarVis', '$EdadVis')";
mysqli_query($conn, $query);
}

function consultaVisitante(){
	global $conn;
	$sql= "SELECT * FROM visitante order by IdVis desc"; 
	$data=array(); 
	if($result= mysqli_query($conn, $sql)){ 
		while($obj=mysqli_fetch_object($result)){ 
			$data[]=$obj; 
		}
	mysqli_free_result($result); 
	return $data;
	}
}


function consultaEvento(){
	global $conn;
	$sql= "SELECT * FROM evento order by IdEven desc"; 
	$data=array(); 
	if($result= mysqli_query($conn, $sql)){ 
		while($obj=mysqli_fetch_object($result)){ 
			$data[]=$obj; 
		}
	mysqli_free_result($result); 
	return $data;
	}
}


function consultaDetalle(){
	global $conn;
	$sql= "SELECT * FROM dev order by IdVis desc"; 
	$data=array(); 
	if($result= mysqli_query($conn, $sql)){ 
		while($obj=mysqli_fetch_object($result)){ 
			$data[]=$obj; 
		}
	mysqli_free_result($result); 
	return $data;
	}
}




////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*Evento*/
function guardar_Evento($NomEven, $TipoEven, $LugarEven, $FechaEven, $HoraEven, $DescriEven){
	global $conn; 
	$query= "INSERT INTO evento (IdEven, NomEven, TipoEven, LugarEven, FechaEven, HoraEven, DescriEven)
			VALUES (NULL, '$NomEven', '$TipoEven', '$LugarEven', '$FechaEven', '$HoraEven', '$DescriEven')";
mysqli_query($conn, $query);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*Dev */
function guardar_DEV($IdVis, $IdEven){
	global $conn; 
	$query= "INSERT INTO dev (IdVis, IdEven)
			VALUES ('$IdVis', '$IdEven')";
mysqli_query($conn, $query);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

function guardar_Cupones($CodCup, $InfCup){
	global $conn;
	$query= "INSERT INTO cupones (IdCup, CodCup, InfCup)
	          VALUES (NULL, (FLOOR(1000000000 + RAND() * 9999999999)), '$InfCup')";
mysqli_query($conn, $query);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

function borrar_evento($IdEven){
     global $conn;
     $query= "DELETE FROM evento WHERE IdEven = '$IdEven'";
mysqli_query($conn, $query);

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////

function borrar_cupon($IdCup){
     global $conn;
     $query= "DELETE FROM cupones WHERE IdCup = '$IdCup'";
mysqli_query($conn, $query);

}


///////////////////////////////////////////////////////////////////////////////////////////////////////////

function modificar_evento($IdEven, $NomEven, $TipoEven, $LugarEven, $FechaEven, $HoraEven, $DescriEven){
	global $conn;
	$query= "UPDATE evento SET NomEven = '$NomEven', TipoEven='$TipoEven', LugarEven='$LugarEven', FechaEven='$FechaEven', HoraEven='$HoraEven', DescriEven='$DescriEven' WHERE IdEven='$IdEven' ";
mysqli_query($conn, $query);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////

function modificar_cupon($IdCup, $CodCup, $InfCup){
    global $conn;
    $query= "UPDATE cupones SET InfCup = '$InfCup' WHERE IdCup = '$IdCup'";
mysqli_query($conn, $query);

}

?>