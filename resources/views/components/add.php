    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .campos {
            display: flex;
            flex-direction: column;
            border: 1px solid #e0e6ed;
            border-radius: 10px;
            padding: 25px;
            margin: 0 0 25px;
            background: #ffffff;
            transition: all 0.3s ease;
        }

        .campos:hover {
            border-color: #ad2029;
        }

        .leyenda {
            background: #ad2029;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 600;
            margin-left: -10px;
            width: auto;
            float: none;
        }

        .secciones {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px 0;
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #000;
            font-size: 15px;
            display: flex;
            align-items: center;
        }

        label:after {
            content: ':';
            margin-left: 2px;
        }

        input,
        select {
            padding: 12px 15px;
            border: 1px solid #dce4ec;
            border-radius: 8px;
            background: #f8fafc;
            font-size: 15px;
            transition: all 0.3s ease;
            width: 100%;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #ad2029;
            background: white;
        }

        input:hover,
        select:hover {
            border-color: #ad2029;
        }

        .hidde {
            display: none;
        }

        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        button {
            background: #ad2029;
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button:hover {
            transform: translateY(-3px);
            background: #f00;
        }

        button i {
            font-size: 20px;
        }

        .resultado {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-weight: 500;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .secciones {
                grid-template-columns: 1fr;
            }

            .campos {
                padding: 20px 15px;
                margin: 0 0 20px;
            }

            h1 {
                font-size: 2rem;
            }

            form {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }

            button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
    </head>
    <body>
        <div class="container">
            <form action="add-process.php" method="post">
                <!-- Campo: Datos Personales -->
                <fieldset class="campos">
                    <legend class="leyenda"><i class="fas fa-user"></i> DATOS PERSONALES</legend>
                    <section class="secciones">
                        <div class="form-group">
                            <label for="primer_nombre">Primer Nombre</label>
                            <input type="text" name="primernombre" placeholder="Ingrese primer nombre">
                        </div>

                        <div class="form-group">
                            <label for="segundo_nombre">Segundo Nombre</label>
                            <input type="text" name="segundonombre" placeholder="Ingrese segundo nombre">
                        </div>

                        <div class="form-group">
                            <label for="primer_apellido">Primer Apellido</label>
                            <input type="text" name="primerapellido" placeholder="Ingrese primer apellido">
                        </div>

                        <div class="form-group">
                            <label for="segundo_apellido">Segundo Apellido</label>
                            <input type="text" name="segundoapellido" placeholder="Ingrese segundo apellido">
                        </div>

                        <div class="form-group">
                            <label for="cedula">Cédula</label>
                            <input type="tel" name="cedula" placeholder="Número de cédula">
                        </div>

                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha Nacimiento</label>
                            <input type="date" name="fechanacimiento">
                        </div>

                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="edoci">
                                <option value="">SELECCIONE</option>
                                <option value="F">FEMENINO</option>
                                <option value="M">MASCULINO</option>
                                <option value="O">OTRO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="estado_civil">Estado Civil</label>
                            <select name="estadocivil" id="edoci">
                                <option value="">SELECCIONE</option>
                                <option value="CASADO(A)">CASADO(A)</option>
                                <option value="CONCUBINO(A)">CONCUBINO(A)</option>
                                <option value="SOLTERO(A)">SOLTERO(A)</option>
                                <option value="VIUDO(A)">VIUDO(A)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="nacionalidad" id="nacionali">
                                <option value="">SELECCIONE</option>
                                <option value="VENEZOLANO(A)">VENEZOLANO(A)</option>
                                <option value="EXTRANJERO">EXTRANJERO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono Móvil</label>
                            <input type="text" name="telefono" placeholder="Número de teléfono">
                        </div>

                        <div class="form-group">
                            <label for="telefono_fijo">Teléfono Fijo</label>
                            <input type="tel" name="telefonofijo" placeholder="Número de teléfono fijo">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="correo@ejemplo.com">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" placeholder="Dirección completa" size="40">
                        </div>

                        <div class="form-group">
                            <label for="Cargo">Cargo</label>
                            <select name="cargo" id="cargo">
                                <option value="">SELECCIONE</option>
                                <option value="ADMIN">ADMINISTRATIVO</option>
                                <option value="PERSONAL">PERSONAL</option>
                                <option value="PREVENCION">PREVENCION</option>
                            </select>
                        </div>
                    </section>
                </fieldset>

                <!-- Campo: Datos Laborales -->
                <fieldset class="campos">
                    <legend class="leyenda"><i class="fas fa-briefcase"></i> DATOS LABORALES</legend>
                    <section class="secciones">
                        <div class="form-group">
                            <label for="nivel_academico">Nivel Académico</label>
                            <select name="nivelacademico" id="nivel_academico">
                                <option value="">SELECCIONE</option>
                                <option value="PRIMARIA">PRIMARIA</option>
                                <option value="BACHILLER">BACHILLER</option>
                                <option value="T.S.U">T.S.U</option>
                                <option value="UNIVERSITARIO(A)">UNIVERSITARIO(A)</option>
                                <option value="MAGISTER">MAGISTER</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tipo_Personal" class="required">Tipo de Personal</label>
                            <select id="tipo_Personal" name="tipoPersonal" required>
                                <option value="" disabled selected>SELECCIONE</option>
                                <option value="uniformado_administrativo">UNIFORMADO ADMINISTRATIVO</option>
                                <option value="uniformado_operativo">UNIFORMADO OPERATIVO</option>
                                <option value="civil_administrativo">CIVIL ADMINISTRATIVO</option>
                                <option value="civil_operativo">CIVIL OPERATIVO</option>
                            </select>
                        </div>

                        <div id="jerarquiaGroup" class="form-group dynamic-field">
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
                        </div>

                        <div id="cargoGroup" class="form-group dynamic-field">
                            <label for="cargoLaboral" class="required">Cargo</label>
                            <select id="cargoLaboral" name="cargoLaboral">
                                <option disabled selected>SELECCIONE</option>
                                <option value="maquinista">MAQUINISTA</option>
                                <option value="asesor_juridico">ASESOR JURIDICO</option>
                                <option value="medico">MEDICO</option>
                                <option value="ambientalista">AMBIENTALISTA</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="estatus">Estatus</label>
                            <select id="estatus" name="estatus" onchange="mostrarCampoFecha()">
                                <option value="">SELECCIONE</option>
                                <option value="activo">ACTIVO</option>
                                <option value="jubilado">JUBILADO</option>
                            </select>
                        </div>

                        <div id="campoFecha" class="hidde form-group">
                            <label for="fecha">Ingrese la fecha:</label>
                            <input type="date" id="fecha" name="fecha">
                        </div>

                        <div class="form-group">
                            <label for="estacion_servicio">Estación de Servicio</label>
                            <select name="estacionservicio" id="estacion_servicio">
                                <option value="">SELECCIONE</option>
                                <option value="SABANA DE MENDOZA">SABANA DE MENDOZA</option>
                                <option value="BUENA VISTA">BUENA VISTA</option>
                                <option value="MONTE CARMELO">MONTE CARMELO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="seccion">Sección</label>
                            <select name="seccion" id="seccion">
                                <option value="">SELECCIONE</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="NINGUNA">NINGUNA</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="rif">RIF</label>
                            <input type="text" name="rif" placeholder="RIF">
                        </div>

                        <div class="form-group">
                            <label for="serial_carnet">Serial del Carnet de la Patria</label>
                            <input type="text" name="serialcarnet" placeholder="Serial">
                        </div>

                        <div class="form-group">
                            <label for="codigo_carnet">Código del Carnet de la Patria</label>
                            <input type="text" name="codigocarnet" placeholder="Código">
                        </div>
                    </section>
                </fieldset>

                <div class="form-actions">
                    <button type="submit" name="guardado">
                        <i class="fas fa-save"></i> Guardar los Datos
                    </button>
                </div>
            </form>

            <div class="resultado" id="resultado"></div>
        </div>

        <script>
            // Función para mostrar campos dinámicos
            function mostrarCampoFecha() {
                const estatus = document.getElementById('estatus');
                const campoFecha = document.getElementById('campoFecha');

                if (estatus.value === 'jubilado') {
                    campoFecha.classList.remove('hidde');
                } else {
                    campoFecha.classList.add('hidde');
                }
            }

            // Funcionalidad para mostrar campos condicionales
            document.getElementById('tipo_Personal').addEventListener('change', function() {
                const tipo = this.value;
                const jerarquiaGroup = document.getElementById('jerarquiaGroup');
                const cargoGroup = document.getElementById('cargoGroup');

                // Mostrar campos basados en la selección
                if (tipo.includes('uniformado')) {
                    jerarquiaGroup.classList.remove('hidde');
                    cargoGroup.classList.add('hidde');
                } else {
                    jerarquiaGroup.classList.add('hidde');
                    cargoGroup.classList.remove('hidde');
                }
            });

            // Inicialmente ocultar campos condicionales
            document.querySelectorAll('.dynamic-field').forEach(el => {
                el.classList.add('hidde');
            });
        </script>
    </body>

    </html>
    <script>
        function mostrarCampoFecha() {
            const estado = document.getElementById('estatus').value;
            const campoFecha = document.getElementById('campoFecha');

            if (estado === 'activo') {
                campoFecha.querySelector('label').innerText = 'Ingrese la fecha de ingreso';
                campoFecha.classList.remove('hidde');
            } else if (estado === 'jubilado') {
                campoFecha.querySelector('label').innerText = 'Ingrese la fecha de jubilación:';
                campoFecha.classList.remove('hidde');
            } else {
                campoFecha.classList.add('hidde');
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipoPersonal = document.getElementById('tipo_Personal');
            const jerarquiaGroup = document.getElementById('jerarquiaGroup');
            const cargoGroup = document.getElementById('cargoGroup');

            tipoPersonal.addEventListener('change', function() {
                // Ocultar ambos grupos primero
                jerarquiaGroup.classList.add('hidden');
                cargoGroup.classList.add('hidden');

                // Resetear los valores de los selects
                document.getElementById('jerarquia').value = '';
                document.getElementById('cargoLaboral').value = '';

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

                const tipoPersonalValue = document.getElementById('tipo_Personal').value;
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
