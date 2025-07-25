<?php
include('basedatos.php');

$nombre1 = strtoupper($_POST['primernombre']);
$nombre2 = strtoupper($_POST['segundonombre']);
$apellido1 = strtoupper($_POST['primerapellido']);
$apellido2 = strtoupper($_POST['segundoapellido']);
$cedula = $_POST['cedula'];
$fn = $_POST['fechanacimiento'];
$sexo = strtoupper($_POST['sexo']);
$estadocivil = strtoupper($_POST['estadocivil']);
$nacionalidad = strtoupper($_POST['nacionalidad']);

$tlfm = $_POST['telefono'];
$tlffijo = $_POST['telefonofijo'];
$correo = strtoupper($_POST['email']);
$direccion = strtoupper($_POST['direccion']);
$cargo = strtoupper($_POST['cargo']);

$nivelacademico = strtoupper($_POST['nivelacademico']);
$tipoPersonal = strtoupper($_POST['tipoPersonal']);
$jerarquia = strtoupper($_POST['jerarquia']);

$cargo2 = strtoupper($_POST['cargo2']);
$estatus = strtoupper($_POST['estatus']);
$estacionservicio = strtoupper($_POST['estacionservicio']);

$seccion = strtoupper($_POST['seccion']);
$rif = strtoupper($_POST['rif']);
$serialcarnet = strtoupper($_POST['serialcarnet']);
$codigocarnet = strtoupper($_POST['codigocarnet']);


$consulta0 = "INSERT INTO fireguard_dates (cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_nacimiento,sexo,
estado_civil,nacionalidad,telefono,telefono_fijo,email,direccion) 
VALUES ('$cedula','$nombre1','$nombre2','$apellido1','$apellido2','$fn','$sexo','$estadocivil','$nacionalidad','$tlfm','$tlffijo',
'$correo','$direccion')";
$resultado0 = $mysqli -> query($consulta0);

$consulta1 = "INSERT INTO dlaboral (cedula,nivel_academico,tipo_personal,jerarquia,cargo,estatus,estacion_servicio,seccion,
rif,serial_carnet,codigo_carnet) 
VALUES ('$cedula','$nivelacademico','$tipoPersonal','$jerarquia','$cargo2','$estatus','$estacionservicio','$seccion',
'$rif','$serialcarnet','$codigocarnet')";
$resultado1 = $mysqli -> query($consulta1);

$consulta2 = "INSERT INTO usersadmin (nombre,apellido,cedula,usuario,pass,cargo) VALUES ('$nombre1','$apellido1','$cedula',
'$correo','$cedula','$cargo')";
$resultado2 = $mysqli -> query($consulta2);

if($resultado1){
    header('location:agregar.php?errorini=1');
}
?>

?>