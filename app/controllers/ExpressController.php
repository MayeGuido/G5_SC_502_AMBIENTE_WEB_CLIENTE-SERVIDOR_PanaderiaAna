<?php
require_once __DIR__ . '/../models/ExpressModel.php';

class ExpressController {
    
    private $model;

    public function __construct() {
        $this->model = new ExpressModel();
    }

    public function listarProductos() {
        return $this->model->listarProductos();
    }

    public function guardarPedidoExpress($cliente, $telefono, $direccion, $producto_id, $cantidad) {
        return $this->model->guardarPedidoExpress($cliente, $telefono, $direccion, $producto_id, $cantidad);
    }
}
