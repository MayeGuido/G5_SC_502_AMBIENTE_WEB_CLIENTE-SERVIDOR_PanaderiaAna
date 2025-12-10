<?php

require_once __DIR__ . '/../../config/database.php';

class ProductoModel 
{
    private $db;

    public function __construct() {
        $this->db = getPDOConnection();
    }

    public function obtenerTodos() {
        $sql = "SELECT * FROM productos ORDER BY id ASC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function obtenerPorCategoria($categoria) {
        $sql = "SELECT * FROM productos WHERE categoria = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$categoria]);
        return $query->fetchAll();
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM productos WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();
    }
}
