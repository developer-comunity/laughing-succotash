<?php
require_once 'lib.php';
$IdEven=$_POST['mid'];
$NomEven=$_POST['mNomEven'];
$TipoEven=$_POST['mTipoEven'];
$LugarEven=$_POST['mLugarEven'];
$FechaEven=$_POST['mFechaEven'];
$HoraEven=$_POST['mHoraEven'];
$DescriEven=$_POST['mDescriEven'];


modificar_evento($IdEven, $NomEven, $TipoEven, $LugarEven, $FechaEven, $HoraEven, $DescriEven);
header("Location: admin.html")




?>