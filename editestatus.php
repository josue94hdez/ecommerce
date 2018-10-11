<?php
include('db.php');

echo $sesion=$_POST['estatus1'];
echo $fecha=date('Y-m-d');

echo $sql2='UPDATE usuarios 
						SET 
						u_estatus="E"
						WHERE u_nombre="'.$sesion.'"';

mysql_query($sql2) or die ('linea 5');
header('Location: personal-information.php');

?>
