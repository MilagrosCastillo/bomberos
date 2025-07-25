<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bomberos');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$protocol = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://'; // Corregido
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$projectPath = str_replace('\\', '/', __DIR__);
$path = str_replace($documentRoot, '', $projectPath);
$path = trim($path, '/');

define('BASE_URL', $protocol . $host . (!empty($path) ? "/$path/" : '/'));
?>
