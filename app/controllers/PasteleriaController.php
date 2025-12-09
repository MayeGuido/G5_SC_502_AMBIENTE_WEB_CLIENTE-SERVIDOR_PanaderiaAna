<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class PasteleriaController {

    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    // Obtener productos categoría Pastelería
    public function pasteleria() {
        return $this->model->obtenerPorCategoria('Pastelería');
    }
}
