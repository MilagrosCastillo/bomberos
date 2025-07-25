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
$sql = "CREATE TABLE IF NOT EXISTS dsalud (
    cedula VARCHAR(255),
    fireguard_dates_cedula VARCHAR(255),
    sangre VARCHAR(255),
    disca VARCHAR(255),
    info1 TEXT,
    enfermedad VARCHAR(255),
    info2 TEXT,
    tallap VARCHAR(10),
    tallac VARCHAR(10),
    tallaz VARCHAR(10),
    tallag VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla dsalud creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>