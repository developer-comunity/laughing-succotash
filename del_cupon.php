<?php
require_once 'lib.php';
$IdCup=$_POST['tid'];

borrar_cupon($IdCup);
header("Location: cupones.html")


?>