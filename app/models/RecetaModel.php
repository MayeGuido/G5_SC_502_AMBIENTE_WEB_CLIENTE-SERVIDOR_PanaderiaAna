<?php
require_once __DIR__ . '/../../config/database.php';

class RecetaModel {

    private $db;

    public function __construct() {
        $this->db = getPDOConnection();

    }

    public function obtenerRecetas() {
        $sql = "SELECT * FROM recetas";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function obtenerRecetaPorId($id) {
        $sql = "SELECT * FROM recetas WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // SOLO PARA ADMIN
    public function crearReceta($data) {
        $sql = "INSERT INTO recetas (nombre, descripcion, ingredientes, imagen)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['ingredientes'],
            $data['imagen']
        ]);
    }

    // SOLO PARA ADMIN
    public function actualizarReceta($id, $data) {
        $sql = "UPDATE recetas SET nombre=?, descripcion=?, ingredientes=?, imagen=? 
                WHERE id=?";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['ingredientes'],
            $data['imagen'],
            $id
        ]);
    }

    // SOLO PARA ADMIN
    public function eliminarReceta($id) {
        $sql = "DELETE FROM recetas WHERE id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}

