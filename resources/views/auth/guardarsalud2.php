<?php

include('basedatos.php');

$cedu = strtoupper($_POST['cedu']);
$sangre = strtoupper($_POST['sangre']);
$pregunta1 = strtoupper($_POST['pregunta1']);
$info1 = strtoupper($_POST['info1']);
$pregunta2 = strtoupper($_POST['pregunta1']);
$info2 = strtoupper($_POST['info1']);
$tallap = strtoupper($_POST['tallap']);
$tallac = strtoupper($_POST['tallac']);
$tallaz = strtoupper($_POST['tallaz']);
$tallag = strtoupper($_POST['tallag']);

$consulta0 = "INSERT INTO dsalud (id,fireguard,sangre,disca,info1,enfermedad,info2,tallap,tallac,tallaz,tallag) 
VALUES ('','$cedu','$sangre','$pregunta1','$info1','$pregunta2','$info2','$tallap','$tallac','$tallaz','$tallag')";
$resultado0 = $mysqli -> query($consulta0);

if($resultado0){
    header('location:editar.php?errorini=1');
}
?>