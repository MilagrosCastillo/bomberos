
<?php
		//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    include('basedatos.php');
		session_start();
		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) and isset($_SESSION['cedula']) and isset($_SESSION['cargo'])){
	?>
  <?php
$pageTitle = "FORMULARIO PERSONAL";
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu-personal.php';
?>
<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/piedepagina.css';?>">
 <div class="min-h-full">
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Resumen</h1>
    </div>
  </header>
  <style>

th{
    padding: 21px 50px;
    border: 1px solid;
    text-align: center;
}
td{
    padding: 21px;
    border: 1px solid;
    text-align: center;
}


</style>
  <center>
<table class="backdrop-blur-sm">
<thead>
    <tr>
        <th>Nombre y Apellido</th>
        <th>Cedula</th>
        <th>Parentezco</th>
        <th>Ver Datos</th>
        <th>Editar Datos</th>
    </tr>
</thead>
<tbody>
<?php
    include('basedatos.php');
    $cedu = $_SESSION['cedula'];
    $consulta = "SELECT * FROM famila WHERE uni_cedula = $cedu ";
    $resultado = $mysqli -> query($consulta);
    $x = 0;
    while($valor = $resultado -> fetch_assoc()){
?>
<tr> 
    <td><?php echo $valor['nombre'] ?></td> 
    <td><?php echo $valor['cedula'] ?></td> 
    <td><?php echo $valor['pariente'] ?></td> 
    <td><a href="./complet.php?info=<?php echo $row['cedula']?>" style="color: #1e3a8a; padding: 7px; border-radius: 7px; font-weight: 600; text-decoration: underline;"><i class="fa-solid fa-eye" style="font-size: 21px; margin-right: 7px;"></i>Ver</a></td> 
    <td><a href="edit.php?id=<?php echo $row['cedula']?>" style="color: #1e3a8a; padding: 7px; border-radius: 7px; font-weight: 600; text-decoration: underline;"><i class="fa-regular fa-pen-to-square" style="font-size: 21px; margin-right: 7px;"></i>Editar</a></td> 
</tr> 
<?php } ?> 
</tbody>
</table>
</center>
</div> 

<?php
    require dirname(__DIR__, 3) . '/resources/views/components/footer.php';
?>
<?php
}else{header('location:index.php');}
?>