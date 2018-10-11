<?php
include('db.php');
session_start();

$sesion=$_POST['usuario2'];
$pass=$_POST['password'];

$fecha=date('Y-m-d');

$sql='UPDATE usuarios SET u_password="'.$pass.'", u_estatus="A"
 WHERE u_nombre="'.$sesion.'"';
 mysql_query($sql) or die('linea 10');
 
 $message = 'usuario y/o contraseña incorrectas';
 echo '<script>';
 echo 'alert("Contraseña Cambiada");';
 echo 'window.setTimeout(function() { window.location.href="shop-account.php";   },200);';
 echo '</script>'; 
?>
