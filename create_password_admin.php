<?php
$contra = "1234"; // Cambia esto por la contraseña que quieras usar
$hash = password_hash($contra, PASSWORD_DEFAULT);
echo "Hash de la contraseña: " . $hash;
?>
