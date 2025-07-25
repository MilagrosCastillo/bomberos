
<?php
		//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    include('basedatos.php');
		session_start();
		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) and isset($_SESSION['cedula']) and isset($_SESSION['cargo'])){
	?>
<?php

require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/auth/conexion.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu.php';
?>

  <div class="min-h-full">
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Resumen</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php require dirname(__DIR__, 3) . '/resources/views/components/resumen.php'; ?>
      </div>
    </main>
  </div> 
  <script src="./js/close.js"></script>
  </body>
  </html>
<?php
}else{header('location:index.php');}
?>
