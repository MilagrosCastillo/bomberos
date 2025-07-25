<?php 
// include('./components/home.php');
require dirname(__DIR__, 2) . '/config.php';
require dirname(__DIR__, 2) . '/resources/views/components/home.php';
?>
    <center>
      <h1 class="text-4xl mt-4">Cuartel de Bomberos Coronel (B)</h1>
      <h1 class="text-4xl">"Alipio Atilano Ramirez"</h1><br>
      <section class="block mt-4 md:flex">
        <div>
        <h3 class="text-2xl">Mision</h3>
        <hr>
        <p class="histo">“Ejercer las funciones de prevención y extinción de Incendios, salvar vidas y propiedades, 
            garantizado a los ciudadanos en general una protección adecuada, oportuna, desarrollando 
            conciencia y participación de la ciudadanía sobre la necesidad de prevenir accidentes y su 
            comportamiento ante las catástrofes”</p><img class="fixed-image" src="../../public/img/imagen3.png" alt="Imagen fija">
        </div>
      <br>
        <div>
        <h3 class="text-2xl">Vision</h3>
        <hr>
        <p class="histo">“Ser un Cuerpo de Bomberos altamente competente para salvaguardar a la ciudadanía de 
            cualquier Catástrofe de origen natural o producido por el hombre, a través de su 
            personal capacitado y entrenado para responder con excelentes habilidades y destrezas 
            bomberiles”</p><img class="fixed-image" src="../../public/img/imagen9.png" alt="Imagen fija">
        </div>
      </section>
      <br>
      
    </center>
<?php
// include('./components/home-end.php');
require dirname(__DIR__, 2) . '/resources/views/components/home-end.php';
?>
