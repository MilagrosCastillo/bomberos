<?php
		//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    include('basedatos.php');
		session_start();
		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) and isset($_SESSION['cedula']) and isset($_SESSION['cargo'])){
?>

<?php
$pageTitle = 'Editar Sus Datos';
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu-personal.php';
?>

<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/piedepagina.css';?>">



<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: white;
        min-height: 100vh;
    }
    .campo-adicional {
            display: none; /* Ocultar por defecto */
            margin-top: 10px;
        }
      
    button {
        background-color: #3498db;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-right: 10px;
        transition: background-color 0.3s;
    }
    .vh{
        height: 100vh;
    }
    .center{
margin: 10vh 21px;
}
select{
    border: 1px solid;
    padding: 4px 16px;
    border-radius: 7px;
}
    </style>
      <script>
        function mostrarCampos(campoId) {
            document.getElementById(campoId).style.display = 'block'; // Mostrar campo adicional
        }

        function ocultarCampos(campoId) {
            document.getElementById(campoId).style.display = 'none'; // Ocultar campo adicional
        }
    </script>

    </head>
    <body>
        <div class="vh">
        <div class="center">
        <form action="regisfamilia.php" method="post" id="formulario">
            <input type="hidden" name="cedu" value="<?php echo $_SESSION['cedula']; ?>">
    <fieldset>
        <legend>Datos del Familiar</legend><br>

        <label for="nombre_esp" class="required-field">Nombre y Apellido completo</label>
        <input type="text" name="nombre_fami" size="30" required >

        <label for="cedula_esp" class="required-field">Cédula</label>
        <input type="text" name="cedula_fami" size="30"  required><br><br>

        <label for="nacimiento_esp" class="required-field">Fecha de nacimiento</label>
        <input type="date" name="nacimiento_fami" required>

        <label for="sexo_fami" class="required-field">Sexo</label>
        <select name="sexo_fami" required>
        <option value="seleccionar">Seleccionar</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>

        <label for="sangrefami">Grupo sanguíneo</label>
        <select name="sangrefami" id="sangreps">
        <option value="seleccione">SELECCIONE</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><br><br>
    <label for="enfermedad_fami">¿Posee alguna enfermedad?</label>
            <label for="si1">Sí</label>
            <input type="radio" id="si1" name="pregunta1" value="si" onclick="mostrarCampos('campoAdicional1')"> 
            
            <label for="no1">No</label>
            <input type="radio" id="no1" name="pregunta1" value="no" onclick="ocultarCampos('campoAdicional1')"> 
            
            <div class="campo-adicional" id="campoAdicional1">
                <label for="enfer_esp">Especifique la enfermedad</label>
                <input type="text" id="enfer_esp" name="enfer_esp">
            </div>
        

        
            <label for="disca_fami">¿Posee alguna discapacidad?</label>
            <label for="si2">Sí</label>
            <input type="radio" id="si2" name="pregunta2" value="si" onclick="mostrarCampos('campoAdicional2')"> 
            <label for="no2">No</label>
            <input type="radio" id="no2" name="pregunta2" value="no" onclick="ocultarCampos('campoAdicional2')"> 
            
            <div class="campo-adicional" id="campoAdicional2">
                <label for="esp_esp">Especifique la discapacidad</label>
                <input type="text" id="esp_esp" name="esp_esp">
            </div><br><br>
    <label for="familiar" class="required-field">Familiar</label>
    <select name="familiar" required>
    <option value="selecionar">Seleccionar</option>
        <option value="padre">Padre</option>
        <option value="madre">Madre</option>
        <option value="esposo">Esposo (a)</option>
        <option value="hijo">Hijo (a)</option>
    </select>

    </fieldset>
    
</form><br><br>
<button type="submit" form="formulario" class="flex mx-auto mt-2">Guardar información</button></div></div>
    </body>
    <?php
    require dirname(__DIR__, 3) . '/resources/views/components/footer.php';
?>
    <?php
}else{header('location:index.php');}
?>
