<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class ReposteriaController {

    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function mostrarReposteria() {
        return $this->model->obtenerPorCategoria("Repostería");
    }
}
