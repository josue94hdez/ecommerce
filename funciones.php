<?php

function busca($target, $tabla, $id, $nmb) {
    $sql = "SELECT $nmb FROM $tabla WHERE $id=\"$target\"";
    $result = mysql_query($sql) or die ($sql);
    list($busca)=mysql_fetch_row($result);
    return $busca;
}

function buscal($target, $tabla, $id, $nmb) {
    $sql = "SELECT $nmb FROM $tabla WHERE $id=\"$target\" LIMIT 1";
    $result = mysql_query($sql) or die ($sql);
    list($busca)=mysql_fetch_row($result);
    return $busca;
}
//FUNCION PARA CAMBIAR FECHA
function cambiar_fecha($fecha, $hr){
$formato='';
//echo $formato;
$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio" ,"Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$fechaA = explode('-', $fecha);
//convierte formatos de fecha
/*switch($fechaA[0])
{
    case
}*/
//$formato.=' ';
$dia = array('','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
$f = $dia[date('N', strtotime($fecha))];

$formato.=$f.' ';//muestra dia
$formato.=$fechaA[2].' ';//muestra dia
$formato.=$meses[number_format($fechaA[1],0)].' ';//muestra mes
$formato.=$fechaA[0].' ';//muestra año
//$formato.=$fecha;
return $formato;
}

//funcion para mostrar fechas de avisos IvanR
function cambiar_fechaa($fecha){
$formato='';
//echo $formato;
$meses = array("","de Enero","de Febrero","de Marzo","de Abril","de Mayo","de Junio","de Julio" ,"de Agosto","de Septiembre","de Octubre","de Noviembre","de Diciembre");

$fechaA = explode('-', $fecha);
//convierte formatos de fecha
/*switch($fechaA[0])
{
    case
}*/
//$formato.=' ';
$dia = array('','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
$f = $dia[date('N', strtotime($fecha))];

//$formato.=$f.' ';//muestra dia
$formato.=$fechaA[2].' ';//muestra dia
$formato.=$meses[number_format($fechaA[1],0)].' ';//muestra mes
//$formato.=$fechaA[0].' ';//muestra año
//$formato.=$fecha;
return $formato;
}
?>