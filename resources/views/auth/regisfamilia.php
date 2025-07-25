<?php

include('basedatos.php');

$cedu = strtoupper($_POST['cedu']);
$nombre_fami = strtoupper($_POST['nombre_fami']);
$cedula_fami = strtoupper($_POST['cedula_fami']);
$nacimiento_fami = strtoupper($_POST['nacimiento_fami']);
$sexo_fami = strtoupper($_POST['sexo_fami']);
$sangrefami = strtoupper($_POST['sangrefami']);
$pregunta1 = strtoupper($_POST['pregunta1']);
$enfer_esp = strtoupper($_POST['enfer_esp']);
$pregunta2 = strtoupper($_POST['pregunta2']);
$esp_esp = strtoupper($_POST['esp_esp']);
$familiar = strtoupper($_POST['familiar']);

$consulta0 = "INSERT INTO famila (id,uni_cedula,nombre,nacimiento,cedula,sexo,sangre,enfermedad,especi_enf,disca,esp_disca,pariente) 
VALUES ('','$cedu','$nombre_fami','$nacimiento_fami','$cedula_fami','$sexo_fami','$sangrefami','$pregunta1','$enfer_esp',
'$pregunta2','$esp_esp','$familiar')";
$resultado0 = $mysqli -> query($consulta0);

if($resultado0){
    header('location:familiar.php?errorini=1');
}
?>