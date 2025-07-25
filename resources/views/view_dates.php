<script src="./js/tailwind-cdn.js"></script><!--Tailwind puro-->
<script src="./js/tailwind.config2.js"></script><!--Configuracion de todos los colores y elementos personalizados de tailwind-->
<style>
.campos{
    display: flex;
    justify-content: flex-start;
    border: 1px solid;
    border-color: #000;
    border-radius: 7px;
    padding: 7px;
    margin: 0px 31px;
}
.secciones{
    margin: 0px 14px;
    width: 21%;
}
.info{
    width: auto;
    min-width: 14%;
    padding: 7px 7px;
    margin-bottom: 41px;
    border: 1px solid;
    border-color: #000;
    border-radius: 7px;
}
</style>
<?php
include('./login/conexion.php');
if (isset($_GET['cedula'])) {
    $cedula = $_GET['cedula'];
    $query = "SELECT * FROM fireguard_dates WHERE cedula = $cedula";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['primer_nombre'];
        $apellido = $row['primer_apellido'];
        $cedula = $row['cedula'];
        $puesto = $row['cargo'];
        $estadoCivil = $row['estado_civil'];
        $poseeDiscapacidad = $row['discapacidad'];
        $ciudad = $row['direccion'];
        $estado = $row['estacion'];
        $genero = $row['genero_sexo'];
    }
}
include('./components/home.php');
?>

<br>
<center><h1 class="text-4xl font-bold"><?php echo $nombre . " " . $apellido?></h1></center>
<fieldset class="campos">
    <legend class="float-none w-auto">Datos Personales</legend>
    <section class="secciones">
        <img class="border border-solid border-black py-20 px-7 w-max mb-6" src="" alt="Foto Personal">
        <label for="primer_nombre">Nombre</label>
        <p class="info" name="nom"><?php echo $nombre?></p>
        <label for="primer_apellido">Apellido</label>
        <p  class="info" name="ape"><?php echo $apellido?></p>
    </section>
    <section class="secciones">
        <label for="cedula">Cedula</label>
        <p class="info" name="cedula"><?php echo $cedula?></p>
        <label for="carg">Puesto/Cargo</label>
        <p class="info" name="carg"><?php echo $puesto?></p>
        <label for="edoci">Estado Civil</label>
        <p class="info" name="edoci"><?php echo $estadoCivil?></p>
        <label for="dis">Posee Discapacidad</label>
        <p class="info" name="dis"><?php echo $poseeDiscapacidad?></p>
    </section>
    <section class="secciones">
        <label for="ciudad">Ciudad</label>
        <p class="info" name="ciudad"><?php echo $ciudad?></p>
        <label for="estado">Estado</label>
        <p class="info" name="estado"><?php echo $estado?></p>
    </section>
</fieldset>
