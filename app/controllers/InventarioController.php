<?php
require_once _DIR_ . '/../models/ProductoModel.php';

class InventarioController {

    public function index() {
        $model = new ProductoModel();
        $productos = $model->obtenerTodos();
        require _DIR_ . '/../views/inventario.php';
    }
}