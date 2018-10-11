<?php
include('../theme/db.php');
include('../theme/funciones.php');

$name='JOSUE';
echo busca($name,'usuarios','u_id','u_mail');

?>
