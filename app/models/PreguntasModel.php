<?php
require_once __DIR__ . '/../../config/database.php';

class PreguntasModel {

    private $pdo;

    public function __construct() {
        $this->pdo = getPDOConnection();
    }

    // Insertar pregunta
    public function guardarPregunta($nombre, $correo, $pregunta) {
        $sql = "INSERT INTO preguntas (nombre, correo, pregunta) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nombre, $correo, $pregunta]);
    }

    // Obtener todas las preguntas (para el admin)
    public function obtenerPreguntas() {
        $sql = "SELECT * FROM preguntas ORDER BY fecha DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
    
    public function obtenerPreguntasFrecuentes() {
        $sql = "SELECT * FROM preguntas_frecuentes";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

}