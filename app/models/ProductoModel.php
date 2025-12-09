<?php
require_once __DIR__ . '/../../config/database.php';

class ProductoModel
{

    private $db;

    public function __construct()
    {
        $this->db = getPDOConnection();
    }

    public function obtenerPorCategoria($categoria)
    {
        $sql = "SELECT * FROM productos WHERE categoria = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$categoria]);
        return $query->fetchAll();
    }

    public function obtenerTodos()
    {
        $sql = "SELECT * FROM productos";
        return $this->db->query($sql)->fetchAll();
    }

    

}
