<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Cuerpo de Bomberos'; ?></title>
  <link rel="icon" href="<?= BASE_URL ?>public/img/mini_logo_low.webp">
  <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/css/estilos-nav.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>iconos/import-icons.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>public/css/sign-in.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>public/css/bootstrap.min5.3.2.css">
  <script src="<?= BASE_URL ?>public/js/tailwind-cdn.js"></script><!--Tailwind puro-->
  <script src="<?= BASE_URL ?>public/js/tailwind.config2.js"></script><!--Configuracion de todos los colores y elementos personalizados de tailwind-->
</head>
<body class="cuerpo">
<header class="cabecera">
  <nav class="naveg" aria-label="Global">
    <div class="logo">
      <a href="<?= BASE_URL ?>index.php" class="logo-link">
        <img class="logo-link" src="<?= BASE_URL ?>public/img/logo_low.webp" alt="">
      </a>
    </div>
    <div class="menu-list">
      <ul class="menu-list-two">
        <li class="menu-despl"><span class="sp"><i class="fa-solid fa-building-columns mr-1"></i>Quienes Somos</span>
          <ul class="plus">
            <li><a href="<?= BASE_URL ?>resources/views/historia.php" class="lists">Historia</a></li>
            <li><a href="<?= BASE_URL ?>resources/views/himno.php" class="lists">Himno</a></li>
            <li><a href="<?= BASE_URL ?>resources/views/vision-y-mision.php" class="lists">Vision y Mision</a></li>
          </ul>
        </li>
        <li class="menu-despl"><span class="sp"><i class="fa-solid fa-building-columns mr-1"></i>Departamentos</span>
          <ul class="plus">
            <li><a href="<?= BASE_URL ?>resources/views/comandancia.php" class="lists">Comandancia</a></li>
            <li><a href="<?= BASE_URL ?>resources/views/inspectoria.php" class="lists">Inspectoria</a></li>
            <li><a href="<?= BASE_URL ?>resources/views/estadomayor.php" class="lists">Estado Mayor</a></li>
            <li><a href="<?= BASE_URL ?>resources/views/docente.php" class="lists">Departamento Docente</a></li>
          </ul>
        <li class="menu-despl"><a href="<?= BASE_URL ?>resources/views/organigrama.php" class="sp"><i class="fa-solid fa-diagram-project mr-1"></i>Organigrama</a></li>
        <li class="menu-despl"><span class="sp"><i class="fas fa-sign-in-alt mr-1"></i>Iniciar Sesion</span>
          <ul class="plus">
            <li><a href="<?= BASE_URL ?>resources/views/auth/admin-login.php" class="lists"><i class="fas fa-user-shield mr-1"></i>Usuario</a></li>
          </ul>
        </li>
      </ul>
    </div>   
    <div class="logi"> 
       
      <button class="hamburg relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 lg:hidden"><!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg></button>
    </div>  
  </nav> 
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="movil" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="pre-menu"></div>
    <div class="menu-secttion">
      <div class="logo-close">
        <a href="index.php">
          <img src="<?= BASE_URL ?>public/img/logo_low.webp" alt="">
        </a>
        <button id="close" type="button">
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="menu-detalles">
         <details>
              <summary class="acordion">Historia</summary>
                <a href="historia.php" class="texto-acordion">Resumen</a>
                <a href="himno.php" class="texto-acordion">Himno</a>
                <a href="#" class="texto-acordion">Cargos</a>
                <br>
            </details>
                <a href="vision-y-mision.php" class="texto-menu">Vision y Mision</a>
                <a href="organigrama.php" class="texto-menu">Organigrama</a>
          <div class="movil-logi">
            <details>
              <summary class="acordion">Iniciar Sesion</summary>
                <a href="" class="texto-acordion">Administrativo</a>
                <a href="" class="texto-acordion">Prevencion</a>
                <a href="#" class="texto-acordion">Personal</a>
                <br>
            </details>
          </div>
      </div>
    </div>
  </div>
</header>
