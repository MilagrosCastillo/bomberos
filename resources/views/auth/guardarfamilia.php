<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "bomberos";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $clave, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear tabla dsalud si no existe
$sql = "CREATE TABLE IF NOT EXISTS familia (
    cedula VARCHAR(255),
    fireguard_dates_cedula VARCHAR(255),
    posee_fami VARCHAR(255)
   
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla dsalud creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>