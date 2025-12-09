<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class PromocionesController {

    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function mostrarPromociones() {
        return $this->model->obtenerPorCategoria("Promoción");
    }
}
