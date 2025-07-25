<?php
$mysqli = new mysqli("localhost","root","","bomberos");
if(mysqli_connect_errno()){
	echo 'Conexion Fallida:',mysqli_connect_error();
	exit();
	}
$acentos = $mysqli->query("SET NAMES 'utf8'");
