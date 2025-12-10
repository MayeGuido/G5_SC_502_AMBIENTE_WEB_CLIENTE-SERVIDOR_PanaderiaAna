<?php
require_once __DIR__ . '/../../config/database.php';

class UsuarioModel {

    private $db;

    public function __construct() {
        $this->db = getPDOConnection();
    }

    public function buscarPorCorreo($correo) {
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$correo]);
        return $stmt->fetch();
    }
}
