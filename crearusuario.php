<?php
include('db.php');
include('funciones.php');


 $nombre=strtoupper($_POST['firstname']);
 $apellido=strtoupper($_POST['lastname']);
 $email=$_POST['email'];
 $telefono=$_POST['telephone'];
 $password=$_POST['pass'];
 $compañia=strtoupper($_POST['company']);
 $direccion1=strtoupper($_POST['address1']);
 $direccion2=strtoupper($_POST['address2']);
 $ciudad=strtoupper($_POST['city']);
 $codpostal=$_POST['post-code'];
 $pais=strtoupper($_POST['country']);
 $terminos=$_POST['terms'];

$sql='SELECT MAX(u_id) AS id FROM usuarios';
$resultsql=mysql_query($sql) or die('linea 19');
$row=mysql_fetch_array($resultsql);
$id=$row['id'];
$idd=$id+1;

echo $sql2='INSERT INTO usuarios SET
				   u_id="'.$idd.'",
				   u_nombre="'.$nombre.'",
			       u_apellido="'.$apellido.'",
			       u_mail="'.$email.'",
			       u_telefono="'.$telefono.'",
			       u_passwd="'.$password.'",
			       u_company="'.$compañia.'",
			       u_direccion1="'.$direccion1.'",
			       u_direccion2="'.$direccion2.'",
			       u_ciudad="'.$ciudad.'",
			       u_codigopostal="'.$codpostal.'",
			       u_pais="'.$pais.'",
			       u_terminos="'.$terminos.'",
			       u_estatus="A"
				   ';
	mysql_query($sql2) or die ('linea 25');
    header('Location: shop-account.php');

?>
