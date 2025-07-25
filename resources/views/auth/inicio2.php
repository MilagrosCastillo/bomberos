<?php
$pageTitle = 'Prevención Dashboard';
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php';
require dirname(__DIR__, 3) . '/resources/views/components/menu-prevencion.php';
?> 
<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/prevencion.css';?>">
<style>
    
        
        .search-container {
            display: none;
            margin-top: 15px;
            transition: all 0.3s ease;
        }
        
        .search-container.visible {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 2.2em;
        }
        
        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .municipio-btn {
            padding: 12px 20px;
            background-color: #a81c1c;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .municipio-btn:hover {
            background-color:  #f76565;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .info-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: none;
            animation: fadeIn 0.5s ease-out;
            border-left: 5px solid #3498db;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .info-title {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            font-size: 1.5em;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .info-item {
            margin-bottom: 10px;
        }
        
        .info-label {
            font-weight: bold;
            color: #7f8c8d;
        }
        
        .info-value {
            margin-top: 5px;
        }
        
        .local-data {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
            border-left: 3px solid #3498db;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
</style>
<center>
<div class="max-w-4xl mt-12">
       
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
           <button onclick="mostrarBusqueda('certificado')" class="municipio-btn">
               Municipio Miranda
           </button>
           
           <button onclick="mostrarBusqueda('certificado-conformidad')" class="municipio-btn">
               Municipio Sucre
           </button>
           
           <button onclick="mostrarBusqueda('registro')" class="municipio-btn">
              Municipio Rafael Rangel
           </button>
           
           <button onclick="mostrarBusqueda('incendios')" class="municipio-btn">
               Municipio Andrés Bello
           </button>
           
           <button onclick="mostrarBusqueda('derrumbes')" class="municipio-btn">
               Municipio La Ceiba
           </button>
           
           <button onclick="mostrarBusqueda('accidentes')" class="municipio-btn">
               Municipio Bolivar
           </button>
           
           <button onclick="mostrarBusqueda('informe')" class="municipio-btn">
               Municipio Monte Carmelo
           </button>
       </div>
       
       <!-- Contenedores de búsqueda -->
       <div id="certificado-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Miranda</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
          
       </div>
       
       <div id="certificado-conformidad-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Sucre</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
           
       </div>
       
       <div id="registro-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Rafael Rangel</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
          
       </div>
       
       <div id="incendios-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Andres Bello</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
           
       </div>
       
       <div id="derrumbes-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio La Ceiba</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
           
       </div>
       
       <div id="accidentes-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Bolivar</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
           
       </div>
       
       <div id="informe-search" class="search-container bg-white p-6 rounded-lg shadow-md">
           <h3 class="text-xl font-semibold mb-4 text-gray-700">Buscar Certificados del Municipio Monte Carmelo</h3>
           <div class="flex">
               <input type="text" placeholder="Ingrese nombre del comercio" class="flex-grow p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
               <button class="bg-blue-500 text-white px-6 rounded-r-lg hover:bg-blue-600 transition">Buscar</button>
           </div>
          
       </div>
   </div>

      <div id="salir-content" class="content-section hien">
        <h2 class="content-header">Salir</h2>
        <p>Gracias por usar el sistema. Para salir, cierre la ventana o pestaña.</p>
      </div>
    </div>
  </main>
</center>
<script>
        // Función para mostrar el campo de búsqueda correspondiente
        function mostrarBusqueda(tipo) {
            // Ocultar todos los campos de búsqueda primero
            document.querySelectorAll('.search-container').forEach(container => {
                container.classList.remove('visible');
            });
            
            // Mostrar el campo de búsqueda seleccionado
            document.getElementById(`${tipo}-search`).classList.add('visible');
            
            // Opcional: resaltar el botón activo
            document.querySelectorAll('.btn').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');
        }
        
        // Mostrar el primer campo por defecto
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.btn').classList.add('active');
            document.querySelector('.search-container').classList.add('visible');
        });
    </script>

