<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class PanaderiaController {

    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function mostrarPanaderia() {
        return $this->model->obtenerPorCategoria("Panadería");
    }
}
