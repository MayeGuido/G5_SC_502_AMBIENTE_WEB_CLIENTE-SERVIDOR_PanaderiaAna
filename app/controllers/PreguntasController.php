<?php
require_once __DIR__ . '/../models/PreguntasModel.php';

class PreguntasController {

    private $model;

    public function __construct() {
        $this->model = new PreguntasModel();
    }

    
    public function index() {
        require_once __DIR__ . '/../views/preguntas.php';
    }

    public function guardar() {
        if (!empty($_POST)) {
            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $pregunta = trim($_POST['pregunta']);

            if ($this->model->guardarPregunta($nombre, $correo, $pregunta)) {
                header("Location: ../../index.php?pregunta=ok");
            } else {
                header("Location: ../../index.php?pregunta=error");
            }
            exit;
        }
    }

    public function listarFAQ() {
        return $this->model->obtenerPreguntasFrecuentes();
    }
}
