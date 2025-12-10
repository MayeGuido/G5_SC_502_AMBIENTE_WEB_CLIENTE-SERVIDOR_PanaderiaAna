<?php
require_once __DIR__ . '/../models/ContactenosModel.php';

class ContactenosController {

    private $model;

    public function __construct() {
        $this->model = new ContactenosModel();
    }

    public function index() {
        $info = $this->model->getInfo();
        require __DIR__ . '/../views/contactenos.php';
    }
}
