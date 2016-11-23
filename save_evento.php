<?php
require_once 'lib.php';

$NomEven=$_POST['NomEven'];
$TipoEven=$_POST['TipoEven'];
$LugarEven=$_POST['LugarEven'];
$FechaEven=$_POST['FechaEven'];
$HoraEven=$_POST['HoraEven'];
$DescriEven=$_POST['DescriEven'];



guardar_Evento($NomEven, $TipoEven, $LugarEven, $FechaEven, $HoraEven, $DescriEven);


?>