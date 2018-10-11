<?php
include ('../theme/db.php');

$email=$_POST['email-login'];
$passwd=$_POST['password-login'];

session_start();
$sql1='SELECT u_nombre FROM usuarios WHERE u_mail="'.$email.'" ';
$resultsql1=mysql_query($sql1) or die ('linea 8');
$row=mysql_fetch_array($resultsql1);
$usuario=$row['u_nombre'];

$sql='SELECT * FROM usuarios WHERE u_mail="'.$email.'" AND u_password="'.$passwd.'"';
$resultsql=mysql_query($sql) or die ('linea 11');

$filas=mysql_num_rows($resultsql);

if($filas>0){
    $_SESSION['uid'] = $usuario;
    header('Location: shop-account.php');
}elseif($filas==0){
$message = 'usuario y/o contraseña incorrectas';
echo '<script>';
echo 'alert("usuario y/o contraseña incorrectas");';
echo 'window.setTimeout(function() { window.location.href="page-login.php";   },200);';
echo '</script>';

 }