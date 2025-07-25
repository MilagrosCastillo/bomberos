<?php
include('basedatos.php');
$correo = strtoupper($_POST['usuario']);
$clave = strtoupper($_POST['pass']);

echo $correo;
echo $clave;
if(isset($correo) and isset($clave)){
	//$clave = md5($clave);
	$c = "SELECT * FROM usersadmin WHERE usuario = '$correo' and pass = '$clave'";
    $r = $mysqli -> query($c);
	$v = $r -> fetch_assoc();
	$cargo = ("".$v['cargo']."");
    
	
	if(isset($v['usuario']) and isset($v['pass']) and isset($v['cargo']) ){
		if($correo == $v['usuario'] and $clave == $v['pass'] and $cargo == 'PERSONAL'){
		session_start();
		$_SESSION['nombre'] = $v['nombre'];
		$_SESSION['apellido'] = $v['apellido'];
		$_SESSION['cedula'] = $v['cedula'];
		$_SESSION['cargo'] = $v['cargo'];
		$_SESSION['id'] = $v['id_usuario'];
		header('location:inicio.php');
		}
	}
	if(isset($v['usuario']) and isset($v['pass']) and isset($v['cargo']) ){
		if($correo == $v['usuario'] and $clave == $v['pass'] and $cargo == 'PREVENCION'){
		session_start();
		$_SESSION['nombre'] = $v['nombre'];
		$_SESSION['apellido'] = $v['apellido'];
		$_SESSION['cedula'] = $v['cedula'];
		$_SESSION['cargo'] = $v['cargo'];
		$_SESSION['id'] = $v['id_usuario'];
		header('location:inicio2.php');
		}
	}
	if(isset($v['usuario']) and isset($v['pass']) and isset($v['cargo']) ){
		if($correo == $v['usuario'] and $clave == $v['pass'] and $cargo == 'ADMIN'){
		session_start();
		$_SESSION['nombre'] = $v['nombre'];
		$_SESSION['apellido'] = $v['apellido'];
		$_SESSION['cedula'] = $v['cedula'];
		$_SESSION['cargo'] = $v['cargo'];
		$_SESSION['id'] = $v['id_usuario'];
		header('location:dashboard.php');
		}
	}
	else{
		header('location:admin-login.php?errorini=1');
	}
}else{
	header('location:admin-login.php');
}
?>
