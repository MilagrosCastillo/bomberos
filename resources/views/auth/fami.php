<?php
// db_connection.php - Database connection file

$host = 'localhost';
$dbname = 'bomberos';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to get all families
function getFamilias($conn) {
    $stmt = $conn->prepare("SELECT * FROM familia");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get family by cedula
function getFamiliaByCedula($conn, $cedula) {
    $stmt = $conn->prepare("SELECT * FROM familia WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to add new family
function addFamilia($conn, $cedula, $fireguard_dates_cedula, $posee_fami) {
    $stmt = $conn->prepare("INSERT INTO familia (cedula, fireguard_dates_cedula, posee_fami) 
                          VALUES (:cedula, :fireguard_dates_cedula, :posee_fami)");
    $stmt->bindParam(':cedula', $cedula);
    $stmt->bindParam(':fireguard_dates_cedula', $fireguard_dates_cedula);
    $stmt->bindParam(':posee_fami', $posee_fami);
    return $stmt->execute();
}

// Function to update family
function updateFamilia($conn, $cedula, $fireguard_dates_cedula, $posee_fami) {
    $stmt = $conn->prepare("UPDATE familia SET fireguard_dates_cedula = :fireguard_dates_cedula, 
                          posee_fami = :posee_fami WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    $stmt->bindParam(':fireguard_dates_cedula', $fireguard_dates_cedula);
    $stmt->bindParam(':posee_fami', $posee_fami);
    return $stmt->execute();
}

// Function to delete family
function deleteFamilia($conn, $cedula) {
    $stmt = $conn->prepare("DELETE FROM familia WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    return $stmt->execute();
}

// Función para obtener todas las parejas
function getParejas($conn) {
    $stmt = $conn->prepare("SELECT * FROM pareja");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para obtener pareja por cédula
function getParejaByCedula($conn, $cedula) {
    $stmt = $conn->prepare("SELECT * FROM pareja WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Función para agregar nueva pareja
function addPareja($conn, $data) {
    $stmt = $conn->prepare("INSERT INTO pareja 
                          (cedula, familia_cedula, nombre_esp, nacimiento_esp, sexo_esp, sangresp, 
                          enfermedad_esp, enfer_esp, disca_esp, esp_esp, cedula_esp, tiene_hijo) 
                          VALUES 
                          (:cedula, :familia_cedula, :nombre_esp, :nacimiento_esp, :sexo_esp, :sangresp, 
                          :enfermedad_esp, :enfer_esp, :disca_esp, :esp_esp, :cedula_esp, :tiene_hijo)");
    
    $stmt->bindParam(':cedula', $data['cedula']);
    $stmt->bindParam(':familia_cedula', $data['familia_cedula']);
    $stmt->bindParam(':nombre_esp', $data['nombre_esp']);
    $stmt->bindParam(':nacimiento_esp', $data['nacimiento_esp']);
    $stmt->bindParam(':sexo_esp', $data['sexo_esp']);
    $stmt->bindParam(':sangresp', $data['sangresp']);
    $stmt->bindParam(':enfermedad_esp', $data['enfermedad_esp']);
    $stmt->bindParam(':enfer_esp', $data['enfer_esp']);
    $stmt->bindParam(':disca_esp', $data['disca_esp']);
    $stmt->bindParam(':esp_esp', $data['esp_esp']);
    $stmt->bindParam(':cedula_esp', $data['cedula_esp']);
    $stmt->bindParam(':tiene_hijo', $data['tiene_hijo']);
    
    return $stmt->execute();
}

// Función para actualizar pareja
function updatePareja($conn, $data) {
    $stmt = $conn->prepare("UPDATE pareja SET 
                          familia_cedula = :familia_cedula, nombre_esp = :nombre_esp, 
                          nacimiento_esp = :nacimiento_esp, sexo_esp = :sexo_esp, 
                          sangresp = :sangresp, enfermedad_esp = :enfermedad_esp, 
                          enfer_esp = :enfer_esp, disca_esp = :disca_esp, 
                          esp_esp = :esp_esp, cedula_esp = :cedula_esp, 
                          tiene_hijo = :tiene_hijo 
                          WHERE cedula = :cedula");
    
    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }
    
    return $stmt->execute();
}

// Función para eliminar pareja
function deletePareja($conn, $cedula) {
    $stmt = $conn->prepare("DELETE FROM pareja WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    return $stmt->execute();
}

// Función para obtener todos los hijos
function getHijos($conn) {
    $stmt = $conn->prepare("SELECT * FROM hijo");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para obtener hijo por cédula
function getHijoByCedula($conn, $cedula) {
    $stmt = $conn->prepare("SELECT * FROM hijo WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Función para agregar nuevo hijo
function addHijo($conn, $data) {
    $stmt = $conn->prepare("INSERT INTO hijo 
                          (familia_cedula, nombre_hijo, cedula_hijo, nacimiento_hijo, sexo_hijo, 
                          lactante, sangrehijo, enfermedad_hijo, enfer_hijo, disca_hijo, especifique_hijo) 
                          VALUES 
                          (:familia_cedula, :nombre_hijo, :cedula_hijo, :nacimiento_hijo, :sexo_hijo, 
                          :lactante, :sangrehijo, :enfermedad_hijo, :enfer_hijo, :disca_hijo, :especifique_hijo)");
    
    $stmt->bindParam(':familia_cedula', $data['familia_cedula']);
    $stmt->bindParam(':nombre_hijo', $data['nombre_hijo']);
    $stmt->bindParam(':cedula_hijo', $data['cedula_hijo']);
    $stmt->bindParam(':nacimiento_hijo', $data['nacimiento_hijo']);
    $stmt->bindParam(':sexo_hijo', $data['sexo_hijo']);
    $stmt->bindParam(':lactante', $data['lactante']);
    $stmt->bindParam(':sangrehijo', $data['sangrehijo']);
    $stmt->bindParam(':enfermedad_hijo', $data['enfermedad_hijo']);
    $stmt->bindParam(':enfer_hijo', $data['enfer_hijo']);
    $stmt->bindParam(':disca_hijo', $data['disca_hijo']);
    $stmt->bindParam(':especifique_hijo', $data['especifique_hijo']);
    
    return $stmt->execute();
}

// Función para actualizar hijo
function updateHijo($conn, $data) {
    $stmt = $conn->prepare("UPDATE hijo SET 
                          familia_cedula = :familia_cedula, nombre_hijo = :nombre_hijo, 
                          cedula_hijo = :cedula_hijo, nacimiento_hijo = :nacimiento_hijo, 
                          sexo_hijo = :sexo_hijo, lactante = :lactante, sangrehijo = :sangrehijo, 
                          enfermedad_hijo = :enfermedad_hijo, enfer_hijo = :enfer_hijo, 
                          disca_hijo = :disca_hijo, especifique_hijo = :especifique_hijo 
                          WHERE cedula = :cedula");
    
    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }
    
    return $stmt->execute();
}

// Función para eliminar hijo
function deleteHijo($conn, $cedula) {
    $stmt = $conn->prepare("DELETE FROM hijo WHERE cedula = :cedula");
    $stmt->bindParam(':cedula', $cedula);
    return $stmt->execute();
}

// API Endpoint handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    try {
        $action = $_POST['action'] ?? '';
        $response = ['success' => false, 'message' => 'Acción no válida'];
        
        switch ($action) {
            case 'get_familias':
                $familias = getFamilias($conn);
                $response = ['success' => true, 'data' => $familias];
                break;
                
            case 'get_familia':
                $cedula = $_POST['cedula'] ?? 0;
                $familia = getFamiliaByCedula($conn, $cedula);
                $response = ['success' => true, 'data' => $familia];
                break;
                
            case 'add_familia':
                $result = addFamilia($conn, $_POST['cedula'], $_POST['fireguard_dates_cedula'], $_POST['posee_fami']);
                $response = ['success' => $result, 'message' => $result ? 'Familia añadida' : 'Error al añadir familia'];
                break;
                
            case 'update_familia':
                $result = updateFamilia($conn, $_POST['cedula'], $_POST['fireguard_dates_cedula'], $_POST['posee_fami']);
                $response = ['success' => $result, 'message' => $result ? 'Familia actualizada' : 'Error al actualizar familia'];
                break;
                
            case 'delete_familia':
                $result = deleteFamilia($conn, $_POST['cedula']);
                $response = ['success' => $result, 'message' => $result ? 'Familia eliminada' : 'Error al eliminar familia'];
                break;
                
            case 'get_parejas':
                $parejas = getParejas($conn);
                $response = ['success' => true, 'data' => $parejas];
                break;
                
            case 'get_pareja':
                $cedula = $_POST['cedula'] ?? 0;
                $pareja = getParejaByCedula($conn, $cedula);
                $response = ['success' => true, 'data' => $pareja];
                break;
                
            case 'add_pareja':
                $data = [
                    'cedula' => $_POST['cedula'],
                    'familia_cedula' => $_POST['familia_cedula'],
                    'nombre_esp' => $_POST['nombre_esp'],
                    'nacimiento_esp' => $_POST['nacimiento_esp'],
                    'sexo_esp' => $_POST['sexo_esp'],
                    'sangresp' => $_POST['sangresp'],
                    'enfermedad_esp' => $_POST['enfermedad_esp'],
                    'enfer_esp' => $_POST['enfer_esp'],
                    'disca_esp' => $_POST['disca_esp'],
                    'esp_esp' => $_POST['esp_esp'],
                    'cedula_esp' => $_POST['cedula_esp'],
                    'tiene_hijo' => $_POST['tiene_hijo']
                ];
                $result = addPareja($conn, $data);
                $response = ['success' => $result, 'message' => $result ? 'Pareja añadida' : 'Error al añadir pareja'];
                break;
                
            case 'update_pareja':
                $data = [
                    'cedula' => $_POST['cedula'],
                    'familia_cedula' => $_POST['familia_cedula'],
                    'nombre_esp' => $_POST['nombre_esp'],
                    'nacimiento_esp' => $_POST['nacimiento_esp'],
                    'sexo_esp' => $_POST['sexo_esp'],
                    'sangresp' => $_POST['sangresp'],
                    'enfermedad_esp' => $_POST['enfermedad_esp'],
                    'enfer_esp' => $_POST['enfer_esp'],
                    'disca_esp' => $_POST['disca_esp'],
                    'esp_esp' => $_POST['esp_esp'],
                    'cedula_esp' => $_POST['cedula_esp'],
                    'tiene_hijo' => $_POST['tiene_hijo']
                ];
                $result = updatePareja($conn, $data);
                $response = ['success' => $result, 'message' => $result ? 'Pareja actualizada' : 'Error al actualizar pareja'];
                break;
                
            case 'delete_pareja':
                $result = deletePareja($conn, $_POST['cedula']);
                $response = ['success' => $result, 'message' => $result ? 'Pareja eliminada' : 'Error al eliminar pareja'];
                break;
                
            case 'get_hijos':
                $hijos = getHijos($conn);
                $response = ['success' => true, 'data' => $hijos];
                break;
                
            case 'get_hijo':
                $cedula = $_POST['cedula'] ?? 0;
                $hijo = getHijoByCedula($conn, $cedula);
                $response = ['success' => true, 'data' => $hijo];
                break;
                
            case 'add_hijo':
                $data = [
                    'familia_cedula' => $_POST['familia_cedula'],
                    'nombre_hijo' => $_POST['nombre_hijo'],
                    'cedula_hijo' => $_POST['cedula_hijo'],
                    'nacimiento_hijo' => $_POST['nacimiento_hijo'],
                    'sexo_hijo' => $_POST['sexo_hijo'],
                    'lactante' => $_POST['lactante'],
                    'sangrehijo' => $_POST['sangrehijo'],
                    'enfermedad_hijo' => $_POST['enfermedad_hijo'],
                    'enfer_hijo' => $_POST['enfer_hijo'],
                    'disca_hijo' => $_POST['disca_hijo'],
                    'especifique_hijo' => $_POST['especifique_hijo']
                ];
                $result = addHijo($conn, $data);
                $response = ['success' => $result, 'message' => $result ? 'Hijo añadido' : 'Error al añadir hijo'];
                break;
                
            case 'update_hijo':
                $data = [
                    'cedula' => $_POST['cedula'],
                    'familia_cedula' => $_POST['familia_cedula'],
                    'nombre_hijo' => $_POST['nombre_hijo'],
                    'cedula_hijo' => $_POST['cedula_hijo'],
                    'nacimiento_hijo' => $_POST['nacimiento_hijo'],
                    'sexo_hijo' => $_POST['sexo_hijo'],
                    'lactante' => $_POST['lactante'],
                    'sangrehijo' => $_POST['sangrehijo'],
                    'enfermedad_hijo' => $_POST['enfermedad_hijo'],
                    'enfer_hijo' => $_POST['enfer_hijo'],
                    'disca_hijo' => $_POST['disca_hijo'],
                    'especifique_hijo' => $_POST['especifique_hijo']
                ];
                $result = updateHijo($conn, $data);
                $response = ['success' => $result, 'message' => $result ? 'Hijo actualizado' : 'Error al actualizar hijo'];
                break;
                
            case 'delete_hijo':
                $result = deleteHijo($conn, $_POST['cedula']);
                $response = ['success' => $result, 'message' => $result ? 'Hijo eliminado' : 'Error al eliminar hijo'];
                break;
        }
        
        echo json_encode($response);
        
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error de base de datos: ' . $e->getMessage()]);
    }
    
    exit;
}
?>
