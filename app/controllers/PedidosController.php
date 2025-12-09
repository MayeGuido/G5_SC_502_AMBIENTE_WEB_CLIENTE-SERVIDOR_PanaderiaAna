<?php
require_once __DIR__ . '/../models/PedidoModel.php';

class PedidosController
{
    private $model;

    public function __construct()
    {
        $this->model = new PedidoModel();
    }

    public function guardarPedido(array $datosCliente, array $itemsCarrito, $usuarioId = null)
    {
        if (empty($datosCliente['nombre_cliente']) ||
            empty($datosCliente['telefono']) ||
            empty($datosCliente['direccion'])) {
            throw new Exception('Todos los datos del cliente son obligatorios');
        }

        return $this->model->crearPedido($datosCliente, $itemsCarrito, $usuarioId);
    }
}
