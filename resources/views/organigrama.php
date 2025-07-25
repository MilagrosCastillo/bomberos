<?php
require dirname(__DIR__, 2) . '/config.php';
require dirname(__DIR__, 2) . '/resources/views/components/home.php';
?>
        <center>
          <h2 class="mt-7 text-4xl">Organigrama</h2>
          <div class="mt-7">
          <img class="orgaimg" src="<?= BASE_URL ?>public/img/organigrama.webp" alt="">
          </div>
        </center>
<?php
require dirname(__DIR__, 2) . '/resources/views/components/home-end.php';
?>
