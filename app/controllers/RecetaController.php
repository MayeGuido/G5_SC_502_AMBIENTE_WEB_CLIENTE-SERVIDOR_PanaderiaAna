<?php
require_once __DIR__ . '/../models/RecetaModel.php';

class RecetaController {

    private $model;

    public function __construct() {
        $this->model = new RecetaModel();
    }

    public function index() {
        return $this->model->obtenerRecetas();
    }

    public function ver($id) {
        return $this->model->obtenerRecetaPorId($id);
    }

    // SOLO ADMIN
    public function crear($data) {
        return $this->model->crearReceta($data);
    }

    // SOLO ADMIN
    public function actualizar($id, $data) {
        return $this->model->actualizarReceta($id, $data);
    }

    // SOLO ADMIN
    public function eliminar($id) {
        return $this->model->eliminarReceta($id);
    }
}
