<?php
require_once 'lib.php';
$IdEven=$_POST['tid'];


borrar_evento($IdEven);
header("Location: admin.html")


?>