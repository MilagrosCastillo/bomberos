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
$sql = "CREATE TABLE IF NOT EXISTS pareja (
    cedula VARCHAR(255),
    fireguard_dates_cedula VARCHAR(255),
    nombre_esp VARCHAR(255),
    nacimiento_esp VARCHAR(255),
    sexo_esp VARCHAR(20),
    sangresp VARCHAR(10),
    enfermedad_esp VARCHAR(10),
    enfer_esp VARCHAR(),255
    disca_esp VARCHAR(10),
    esp_esp VARCHAR(255),
    cedula_esp VARCHAR(30),
    tiene_hijo VARCHAR(10)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla dsalud creada exitosamente";
} else {
    echo "Error creando tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>