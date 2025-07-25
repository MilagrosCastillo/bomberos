
<?php
		//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    include('basedatos.php');
		session_start();
		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) and isset($_SESSION['cedula']) and isset($_SESSION['cargo'])){
	?>
<?php

// include('conexion.php');
// include('./components/home-basic.php');
// include('./components/menu.php');
// include('./components/crud/add.php');

require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu.php';
require dirname(__DIR__, 3) . '/resources/views/components/add.php';
?>
<?php
}else{header('location:index.php');}
?>
