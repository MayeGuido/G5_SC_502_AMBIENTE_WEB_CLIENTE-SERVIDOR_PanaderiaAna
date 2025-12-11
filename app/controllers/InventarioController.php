<?php
require_once __DIR__ . '/../models/ProductoModel.php';

class InventarioController {

    public function index() {
        $model = new ProductoModel();
        $productos = $model->obtenerTodos();

      
        require_once __DIR__ . '/../views/Inventario.php';
    }
}
