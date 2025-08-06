
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

<style>
  .container {
            display: flex;
            justify-content: space-between; /* Espacio entre los divs */
            padding: 20px; /* Espaciado interno */
        }
  .left {
    padding: 20px;
    width: 45%; 
  }
  .right {
    padding: 20px;
    width: 45%;
  }
</style>
  <div class="min-h-full">
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Resumen</h1>
      </div>
     
    </header><br><br>
    <div class="container">
    <div class="right">
    <input type="text" placeholder="Ingrese nombre del personal" class="w-80 h-10 flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-4 focus:ring-red-500">
     <button class="w-40 h-10 bg-red-500 text-white px-6 rounded-r-lg hover:bg-red-600 transition">Buscar</button><br><br></div>
     <div class="left">
    <label for="tipo_Personal" class="required">Personal</label>
                            <select id="tipo_Personal" name="tipoPersonal" required>
                                <option value="" disabled selected>TODOS</option>
                                <option value="uniformado_administrativo">UNIFORMADO ADMINISTRATIVO</option>
                                <option value="uniformado_operativo">UNIFORMADO OPERATIVO</option>
                                <option value="civil_administrativo">CIVIL ADMINISTRATIVO</option>
                                <option value="civil_operativo">CIVIL OPERATIVO</option>
                                <option value="jubilados">JUBILADOS</option>
                            </select>
                            </div>
                            </div>
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
