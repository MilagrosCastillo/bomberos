<?php
require dirname(__DIR__, 3) . '/config.php';
require dirname(__DIR__, 3) . '/resources/views/components/home.php';
?>
<div class="fondo_login">
    <div class="logo-layer">
  <div class="logo-section">
    <h2 class="text-logo-login">Iniciar Sesión</h2>
  </div>
  <div class="form-section">
  <form class="formu" action="logun_validate.php" method="POST">

      <div>
        <label for="email" class="text-input-section">Usuario</label>
        <div class="casilla-input">
          <input id="email" name="usuario" type="text" autocomplete="email" required class="input-section">
        </div>
      </div>
      <div>
        <div class="password-section">
          <label for="password" class="text-input-section">Contraseña</label>
          <div class="">
            <a href="#" class="text-password-section">Recuperar Contraseña</a>
          </div>
        </div>
        <div class="casilla-input">
          <input id="password" name="pass" type="password" autocomplete="current-password" required class="input-section">
        </div>
      </div>
      <div>
        <input type="submit" name="logbtn" class="button-login" value="Iniciar Sesión">
      </div>
    </form>
  </div>
</div>
</div>
<?php
require dirname(__DIR__, 3) . '/resources/views/components/home-end.php';
?>
