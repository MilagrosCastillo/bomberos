<?php
$pageTitle = 'Formulario de Carga Familiar';
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu-prevencion.php';
?> 
<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/prevencion.css';?>">
    <style>
        
        .form-group {
            transition: all 0.3s ease;
        }
        
        .form-group:focus-within label {
            font-weight: 600;
        }
        
    </style>
</head>
<body>
    <div class="max-w-4xl mx-auto bg-white mt-7 overflow-hidden">
        <form class="p-6 sm:p-8">
            <fieldset class="border border-gray-300 rounded-lg p-6">
                <legend class="text-xl font-bold px-4">Información Básica</legend>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div class="form-group">
                        <label for="certNumber" class="block text-sm font-medium text-gray-700 mb-1">Número de Certificado</label>
                        <input type="text" id="certNumber" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                    
                    <div class="form-group">
                        <label for="localName" class="block text-sm font-medium text-gray-700 mb-1">Nombre del local</label>
                        <input type="text" id="localName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                </div>
                
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Cédula o R.I.F</label>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="form-group">
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                <option value="SELECCIONE">Tipo</option>
                                <option value="CEDULA">CÉDULA</option>
                                <option value="R.I.F">R.I.F</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                <option value="SELECCIONE">Prefijo</option>
                                <option value="V">V-</option>
                                <option value="E">E-</option>
                                <option value="J">J-</option>
                                <option value="P">P-</option>
                                <option value="G">G-</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="Número" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <div class="form-group">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
                        <input type="text" id="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="form-group">
                        <label for="localNumber" class="block text-sm font-medium text-gray-700 mb-1">Número del local</label>
                        <input type="text" id="localNumber" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                    
                    <div class="form-group">
                        <label for="state" class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                        <select id="state" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            <option value="seleccione">SELECCIONE</option>
                            <option value="Estado Trujillo">Trujillo</option>
                            <option value="Caracas">Caracas</option>
                            <option value="Zulia">Zulia</option>
                            <option value="Lara">Lara</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="form-group">
                        <label for="municipio" class="block text-sm font-medium text-gray-700 mb-1">Municipio</label>
                        <select id="municipio" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            <option value="" selected disabled>Seleccione un municipio</option>
                            <option value="miranda">Miranda</option>
                            <option value="sucre">Sucre</option>
                            <option value="rafael_rangel">Rafael Rangel</option>
                            <option value="andres_bello">Andres Bello</option>
                            <option value="la_ceiba">La Ceiba</option>
                            <option value="bolivar">Bolívar</option>
                            <option value="monte_carmelo">Monte Carmelo</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="parroquia" class="block text-sm font-medium text-gray-700 mb-1">Parroquia</label>
                        <select id="parroquia" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition" disabled>
                            <option value="" selected disabled>Primero seleccione un municipio</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col sm:flex-row justify-end gap-4">
                    <button type="reset" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition font-medium">Limpiar Formulario</button>
                    <button type="submit" class="px-6 py-2 bg-firetruck text-white rounded-lg hover:bg-[#b00] transition font-medium shadow-md hover:shadow-lg">Generar Certificado</button>
                </div>
            </fieldset>
        </form>
    </div>
    
    <script>
        // Script para manejar la dependencia entre municipio y parroquia
        document.getElementById('municipio').addEventListener('change', function() {
            const parroquiaSelect = document.getElementById('parroquia');
            const municipio = this.value;
            
            if (municipio) {
                parroquiaSelect.disabled = false;
                parroquiaSelect.innerHTML = '';
                
                // Agregar opción por defecto
                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = 'Seleccione una parroquia';
                defaultOption.disabled = true;
                defaultOption.selected = true;
                parroquiaSelect.appendChild(defaultOption);
                
                // Agregar opciones basadas en el municipio seleccionado
                let parroquias = [];
                
                if (municipio === 'miranda') {
                    parroquias = ['El Dividive', 'Agua Caliente', 'Agua Santa', 'El Cenizo', 'Valerita'];
                } else if (municipio === 'sucre') {
                    parroquias = ['Sabana de Mendoza', 'Junín', 'Valmore Rodríguez', 'El Paraíso'];
                } else  {
                    parroquias = ['Betijoque', 'José Gregorio Hernández', 'La Pueblita', 'Los Cedros'];
                }
                
                parroquias.forEach(parroquia => {
                    const option = document.createElement('option');
                    option.value = parroquia.toLowerCase().replace(/\s+/g, '_');
                    option.textContent = parroquia;
                    parroquiaSelect.appendChild(option);
                });
            } else {
                parroquiaSelect.disabled = true;
                parroquiaSelect.innerHTML = '<option value="" selected disabled>Primero seleccione un municipio</option>';
            }
        });
    </script>
</body>
</html>
