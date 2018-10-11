<?php
include('db.php');
session_start();

$sesion=$_POST['usuario'];
$pass=$_POST['password'];

$fecha=date('Y-m-d');

$sqlinformacion='SELECT * FROM usuarios WHERE u_nombre="'.$sesion.'"';
$resultsqlinformacion=mysql_query($sqlinformacion) or die('linea 10');
  while($row=mysql_fetch_array($resultsqlinformacion)){
    
    $pass2=$row['u_password'];
    
  }

  if($pass==$pass2){


echo $sql2='UPDATE usuarios 
						SET 
						u_estatus="E"
						WHERE u_nombre="'.$sesion.'"';

mysql_query($sql2) or die ('linea 5');
header('Location: change-password.php');

}else{
$message = 'usuario y/o contraseña incorrectas';
echo '<script>';
echo 'alert("La contraseña actual es incorrecta Verificala");';
echo 'window.setTimeout(function() { window.location.href="change-password.php";   },200);';
echo '</script>';
}
?>
