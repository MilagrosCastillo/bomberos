<?php
session_start();
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Si no hay sesión activa, redirigir al login
    header("location:admin-login.php");
    exit();
}
?>
