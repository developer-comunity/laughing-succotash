<?php
	include('conexion.php');
	global $conn;
	if(!empty($_POST['tEmail']) && !empty($_POST['tPassword']))
	{
		$sNombre = $_POST['tEmail'];
		$sPW = $_POST['tPassword'];
						
		if((isset($sNombre)) && (isset($sPW)))
		{
			$comando = mysqli_query($conn,"SELECT CorreoVis, ContraVis FROM visitante WHERE CorreoVis = '$sNombre'") or die("<label class='label label-danger'>Error consultando usuario!</label");
			$registro = mysqli_fetch_array($comando);

			if($sPW == $registro['ContraVis'])
			{
				echo "Logeado!";		
			}
			else
			{
				header("Location: index.html");
			}
		}
		else
		{
			header("Location: index.html");
		}
						
	}
	else	
	{
							
		header("Location: index.html");
	}

?>
