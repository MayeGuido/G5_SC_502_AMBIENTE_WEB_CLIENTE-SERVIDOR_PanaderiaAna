<?php
// CONFIGURACIÓN DE BASE DE DATOS SEGÚN MVC DEL PROFE

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'Admin321!');
define('DB_NAME', 'panaderia_ana');
define('DB_CHARSET', 'utf8mb4');

function getPDOConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        return new PDO($dsn, DB_USER, DB_PASS, $options);

    } catch (PDOException $e) {
        echo "❌ Error de conexión: " . $e->getMessage();
        die();
    }
    function getConnection() {
    return getPDOConnection();
    }
}
