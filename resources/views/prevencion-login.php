<?php
require dirname(__DIR__, 2) . '/config.php';
require dirname(__DIR__, 2) . '/resources/views/components/home.php';
?>

<div class="fondo_login">
    <div class="logo-layer">
  <div class="logo-section">
    <h2 class="text-logo-login">Iniciar Sesión Como Personal De Prevención</h2>
  </div>
  <div class="form-section">
    <form class="formu" action="view_dates.php" method="GET">

      <div>
        <label for="cedula" class="text-input-section">Cédula</label>
        <div class="casilla-input">
          <input id="email" name="cedula" type="text" autocomplete="off" required class="input-section">
        </div>
      </div>
        <br>
        <div>
            <label for="password" class="text-input-section">Contraseña</label>
            <div class="casilla-input">
            <input id="email" name="password" type="password" required class="input-section">
        </div>
      </div>
      <div>
        <!--<input type="submit" name="usuario" class="button-login" value="Ver Datos">-->
        <a class="button-login" href="<?= BASE_URL?>resources/views/auth-prevencion/inicio.php">Ver Datos</a>
      </div>
    </form>
  </div>
</div>
</div>
<?php
require dirname(__DIR__, 2) . '/resources/views/components/home-end.php';
