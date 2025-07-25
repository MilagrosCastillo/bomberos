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
$sql = "CREATE TABLE IF NOT EXISTS hijo (
    cedula VARCHAR(255),
    fireguard_dates_cedula VARCHAR(255),
    nombre_hijo VARCHAR(255),
    cedula_hijo VARCHAR(30)
    nacimiento_hijo VARCHAR(255),
    sexo_hijo VARCHAR(20),
    lactante VARCHAR(10),
    sangrehijo VARCHAR(10),
    enfermedad_hijo VARCHAR(10),
    enfer_hijo VARCHAR(),255
    disca_hijo VARCHAR(10),
    especifique_hijo VARCHAR(255),
    
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla dsalud creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>