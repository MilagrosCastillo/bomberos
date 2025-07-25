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
.leyenda{
    width: auto;
    float: none;
    font-size: 16px;
}

.secciones{
    margin: 0px 14px;
    /* width: 21%; */
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
input{
    border: 1px solid;
    border-radius: 7px;
    padding: 4px 7px;
    margin-bottom: 14px;
    width: auto;
}
select{
    padding: 4px 7px;
    border-radius: 7px;
    width: 240px;
    margin-bottom: 14px;
    background-color: transparent;
    border: 1px solid;
}
.hidde {
				display: none;
			}
		.resultado {
            margin-top: 20px;
        }
</style>
<br>
<center><h1 class="text-4xl font-bold"> REGISTRO DEL PERSONAL</h1></center>

<form action="add-process.php" method="post">

        <fieldset>
		<fieldset class="campos">
    <legend class="leyenda">DATOS PERSONALES</legend>
    <section class="secciones">
	<label for="primer_nombre">Primer Nombre</label><input type="text" name="primernombre" size="20">
	<label for="segundo_nombre">Segundo Nombre</label><input type="text" name="segundonombre" size="20"><br><br>
	<label for= "primer_apellido">Primer Apellidos</label><input type="text" name="primerapellido" size="20">
	<label for= "segundo_apellido">Segundo Apellidos</label><input type="text" name="segundoapellido" size="20"><br><br>
	<label for="cedula">Cedula</label><input type="tel" name="cedula" size="15">
	<label for="fecha_nacimiento">Fecha Nacimiento</label><input type="date" name="fechanacimiento" size="10"> 
	<label for="sexo">Sexo</label>
	<select name="sexo" id="edoci">
	    <option value="sexo">SELECCIONE</option>
	    <option value="sexo">FEMENINO</option>
	    <option value="sexo">MASCULINO</option>
	    <option value="sexo">OTRO</option>
	</select>
    <br><br>
    <label for="estado_civil">Estado Civil</label>
	<select name="estadocivil" id="edoci">
        <option value="estado_civil">SELECCIONE</option>
        <option value="estado_civil">CASADO(A)</option>
        <option value="estado_civil">CONCUBINO(A)</option>
        <option value="estado_civil">SOLTERO(A)</option>
        <option value="estado_civil">VIUDO(A)</option>
	</select>
	<label for="nacionalidad">Nacionalidad</label>
	<select name="nacionalidad" id="nacionali">
        <option value="seleccion">SELECCIONE</option>
        <option value="venezolano">VENEZOLANO(A)</option>
        <option value="venezolano">EXTRANJERO</option>
	</select>
	<label for="telefono">Tlf</label><input type="text" name="telefono" size="10">
	<label for="telefono_fijo">Tlf Fijo</label><input type="tlfca" name="telefonofijo" size="10"><br><br>
	<label for="email">Email</label><input type="text" name="email" size="15">
	<label for="direccion">Direccion</label><input type="text" name="direccion" size="40">
    <label for="Cargo">Cargo</label>
	<select name="cargo" id="cargo">
        <option>SELECCIONE</option>
        <option value="ADMIN">ADMINISTRATIVO</option>
        <option value="PERSONAL">PERSONAL</option>
        <option value="PREVENCION">PREVENCION</option>
	</select>
</fieldset>
<br><br>
<fieldset class="campos">
<legend class="leyenda">DATOS LABORAL</legend>
<section class="secciones">
<label for="nivel_academico">Nivel Academico</label>
<select name="nivelacademico" id="nivel_academico">
    <option value="nivel_academico">SELECCIONE</option>
    <option value="nivel_academico">PRIMARIA</option>
    <option value="nivel_academico">BACHILLER</option>
    <option value="nivel_academico">T.S.U</option>
    <option value="nivel_academico">UNIVERSITARIO(A)</option>
    <option value="nivel_academico">MAGISTER</option>
</select>
<label for="tipo_Personal" class="required">Tipo de Personal</label>
<select id="tipo_Personal" name="tipoPersonal" required>
    <option value="" disabled selected>SELECCIONE</option>
    <option value="uniformado_administrativo">UNIFORMADO ADMINISTRATIVO</option>
    <option value="uniformado_operativo">UNIFORMADO OPERATIVO</option>
    <option value="civil_administrativo">CIVIL ADMINISTRATIVO</option>
    <option value="civil_operativo">CIVIL OPERATIVO</option>
</select>
				
                <label for="jerarquia" class="required">Jerarquía</label>
                <select id="jerarquia" name="jerarquia">
                    <option disabled selected>SELECCIONE</option>
                    <option value="Bombero Raso">Bombero Raso.</option>
                    <option value="Distinguido">Distinguido</option>
                    <option value="Cabo Segundo">Cabo Segundo</option>
                    <option value="Cabo 2do">Cabo 2do</option>
                    <option value="Cabo 1ero">Cabo 1ero</option>
                    <option value="Sargento 2do">Sargento 2do</option>
                    <option value="Sargento 1ero">Sargento 1ero</option>
                    <option value="Sargento Mayor">Sargento Mayor</option>
                    <option value="teniente">Teniente</option>
                    <option value="1er. Teniente">1er. Teniente</option>
                    <option value="Capitán">Capitán</option>
                    <option value="Mayor">Mayor</option>
                    <option value="Teniente Coronel">Teniente Coronel</option>
                    <option value="Coronel">Coronel</option>
                    <option value="General">General</option>
                </select>
            </div><br><br>
            
            
                <label for="cargo2" class="required">Cargo</label>
                <select id="cargo" name="cargo2">
                    <option disabled selected>SELECCIONES</option>
                    <option value="maquinista">MAQUINISTA</option>
                    <option value="asesor_juridico">ASESOR JURIDICO</option>
                    <option value="medico">MEDICO</option>
                    <option value="ambientalista">AMBIENTALISTA</option>
                </select>
            </div>
			<label for="estatus">Estatus</label>
			<select id="estatus" name="estatus" onchange="mostrarCampoFecha()">
				<option value="estatus">SELECCIONE</option>
				<option value="activo">ACTIVO</option>
				<option value="jubilado">JUBILADO</option>
				<option value="vacaciones">VACACIONES</option>
			</select> 
			<div id="campoFecha" class="hidde">
				<label for="fecha">Ingrese la fecha:</label>
				<input type="date" id="fecha" name="fecha">
			</div>
              <br><br>
               <label for="estacion_servicio">Estacion de servicio</label>
               <select name="estacionservicio" id="estacion_servicio">
               <option value="estacion">SELECCIONE</option>
               <option value="estacion">SABANA DE MENDOZA</option>
               <option value="estacion">BUENA VISTA</option>
               <option value="estacion">MONTE CARMELO</option>
               </select>
           </select>
          
           <label for="seccion">Seccion</label>
			<select name="seccion" id="seccion">
			<option value="seccion">SELECCIONE</option>
			<option value="seccion">A</option>
			<option value="seccion">B</option>
			<option value="seccion">C</option>
			<option value="seccion">NINGUNA</option>
			</select>
			<label for="rif">RIF</label>
			<input type="text" name="rif" size="8"><br><br>
			<label for="serial_carnet">Serial del Carnet de la Patria</label>
			<input type="text" name="serialcarnet" size="8">
			<label for="codigo_carnet">Codigo del Carnet de la Patria</label>
			<input type="text" name="codigocarnet" size="8">
			</section>>
			<br><br>
          </fieldset><br><br>
		  <center><button class="rounded-lg border border-solid border-black m-3 p-7" type="submit" name="guardado"><i class="fa-regular fa-floppy-disk"></i> Guardar los Datos</button></center>
    </form>
	<div class="resultado" id="resultado"></div>
	<script>
        function mostrarCampoFecha() {
            const estado = document.getElementById('estado').value;
            const campoFecha = document.getElementById('campoFecha');

            if (estado === 'activo') {
                campoFecha.querySelector('label').innerText = 'Ingrese la fecha de ingreso';
                campoFecha.classList.remove('hidde');
            } else if (estado === 'jubilado') {
                campoFecha.querySelector('label').innerText = 'Ingrese la fecha de jubilación:';
                campoFecha.classList.remove('hidde');
            } else if (estado === 'vacaciones') {
                campoFecha.querySelector('label').innerText = 'Ingrese la fecha de vacaciones:';
                campoFecha.classList.remove('hidde');
            } else {
                campoFecha.classList.add('hidde');
            }
        }
    </script>
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipoPersonal = document.getElementById('tipoPersonal');
            const jerarquiaGroup = document.getElementById('jerarquiaGroup');
            const cargoGroup = document.getElementById('cargoGroup');
            
            tipoPersonal.addEventListener('change', function() {
                // Ocultar ambos grupos primero
                jerarquiaGroup.classList.add('hidden');
                cargoGroup.classList.add('hidden');
                
                // Resetear los valores de los selects
                document.getElementById('jerarquia').value = '';
                document.getElementById('cargo').value = '';
                
                // Mostrar el grupo correspondiente según la selección
                const selectedValue = this.value;
                
                if (selectedValue === 'uniformado_administrativo' || selectedValue === 'uniformado_operativo') {
                    jerarquiaGroup.classList.remove('hidden');
                } else if (selectedValue === 'civil_administrativo' || selectedValue === 'civil_operativo') {
                    cargoGroup.classList.remove('hidden');
                }
            });
            
            // Validación del formulario
            document.getElementById('laboralForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const tipoPersonalValue = document.getElementById('tipoPersonal').value;
                let isValid = true;
                
                if (!tipoPersonalValue) {
                    alert('Por favor seleccione el tipo de personal');
                    isValid = false;
                }
                
                if ((tipoPersonalValue === 'uniformado_administrativo' || tipoPersonalValue === 'uniformado_operativo') && 
                    !document.getElementById('jerarquia').value) {
                    alert('Por favor seleccione una jerarquía');
                    isValid = false;
                }
                
                if ((tipoPersonalValue === 'civil_administrativo' || tipoPersonalValue === 'civil_operativo') && 
                    !document.getElementById('cargo').value) {
                    alert('Por favor seleccione un cargo');
                    isValid = false;
                }
                
                if (isValid) {
                    alert('Formulario enviado correctamente');
                    // Aquí podrías agregar código para enviar los datos a un servidor
                }
            });
        });
    </script>
<?php ?>



