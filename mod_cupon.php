<?php
require_once 'lib.php';
$IdCup=$_POST['mid'];
$CodCup=$_POST['mCodCup'];
$InfCup=$_POST['mInfCup'];



modificar_cupon($IdCup, $CodCup, $InfCup);
header("Location: cupones.html")




?>