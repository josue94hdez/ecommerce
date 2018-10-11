<?php
include('db.php');
 $sesion=$_POST['usuario'];
 $nombre=strtoupper($_POST['firstname']);
 $apellido=strtoupper($_POST['lastname']);
 $email=$_POST['email'];
 $telefono=$_POST['telephone'];
 $compañia=strtoupper($_POST['company']);
 $direccion1=strtoupper($_POST['address1']);
 $direccion2=strtoupper($_POST['address2']);
 $ciudad=strtoupper($_POST['city']);
 $codpostal=$_POST['post-code'];

$sql2='UPDATE usuarios SET
				   u_nombre="'.$nombre.'",
			       u_apellido="'.$apellido.'",
			       u_mail="'.$email.'",
			       u_telefono="'.$telefono.'",
			       u_company="'.$compañia.'",
			       u_direccion1="'.$direccion1.'",
			       u_direccion2="'.$direccion2.'",
			       u_ciudad="'.$ciudad.'",
			       u_codigopostal="'.$codpostal.'",
			       u_pais="'.$pais.'",
			       u_terminos="'.$terminos.'",
			       u_estatus="A"
			       WHERE u_nombre="'.$sesion.'"
				   ';
	mysql_query($sql2) or die ('linea 25');
    
    $message = 'usuario y/o contraseña incorrectas';
 	echo '<script>';
 	echo 'alert("Datos Actualizados");';
 	echo 'window.setTimeout(function() { window.location.href="shop-account.php";   },200);';
 	echo '</script>';

?>
