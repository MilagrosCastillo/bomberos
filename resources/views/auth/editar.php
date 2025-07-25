
<?php
		//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    include('basedatos.php');
		session_start();
		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) and isset($_SESSION['cedula']) and isset($_SESSION['cargo'])){
?>

<?php
$pageTitle = "Editar Sus Datos";
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu-personal.php';
?>
<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/piedepagina.css';?>">

        <form action="guardarsalud2.php" method="post"><br><br>
        <input type="hidden" name="cedu" value="<?php echo $_SESSION['cedula'];?>">
        <fieldset>
            <label for="sangre">Grupo Sanguineo</label>
			<select name="sangre" id="">
				<option>SELECCIONE</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
			    <option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select><br><br>
			<label for="disca">Posee Alguna Discapacidad</label>
			<label for="si1">Sí</label>
            <input type="radio" id="si1" name="pregunta1" value="si" onclick="mostrarCampos('campoAdicional1')"> 
            
            <label for="no1">No</label>
            <input type="radio" id="no1" name="pregunta1" value="no" onclick="ocultarCampos('campoAdicional1')"> 
            
            <div class="campo-adicional" id="campoAdicional1">
                <label for="info1">Espesifique</label>
                <input type="text" id="info1" name="info1">
            </div><br><br>
    

    <label for="enfermedad">Posee Alguna Enfermedad Patologica</label>
    <label for="si2">Sí</label>
            <input type="radio" id="si2" name="pregunta2" value="si" onclick="mostrarCampos('campoAdicional2')"> 
            
            <label for="no2">No</label>
            <input type="radio" id="no2" name="pregunta2" value="no" onclick="ocultarCampos('campoAdicional2')"> 
            
            <div class="campo-adicional" id="campoAdicional2">
                <label for="info2">Especifique</label>
                <input type="text" id="info2" name="info2">
            </div>
            </fieldset>

            <br>
            <br>

            <fieldset>
            <legend>DATOS ANTROPOMETRICOS</legend>
            <label for="tallap">Talla de Pantalon</label>
            <input type="text" name="tallap" size="5">
            <label for="tallac">Talla de Camisa</label>
            <input type="text" name="tallac" size="5">
            <label for="tallaz">Talla de Zapato</label>
            <input type="text" name="tallaz" size="5">
            <label for="tallag">Talla de Gorra</label>
            <input type="text" name="tallag" size="5">
            <br><br>
            </fieldset>
		  <br><br>
          <center><input  class="rounded-lg border border-solid border-black m-3 p-7 backdrop-blur-sm" type="submit" name="btn1" value="Guardar"></center>
        </form>
    </div>
    </div>
        <script>
            function mostrarCampos(campoId) {
        document.getElementById(campoId).style.display = 'block'; // Mostrar campo adicional
    }
    
    function ocultarCampos(campoId) {
        document.getElementById(campoId).style.display = 'none'; // Ocultar campo adicional
    }
        </script>
<?php
    require dirname(__DIR__, 3) . '/resources/views/components/footer.php';
?>
<?php
}else{header('location:index.php');}
?>