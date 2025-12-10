<?php
require_once _DIR_ . '/../models/ProductoModel.php';

class CarritoController
{
    private $productoModel;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        $this->productoModel = new ProductoModel();
    }

    public function agregarProducto($idProducto, $cantidad = 1)
    {
        $idProducto = (int)$idProducto;
        $cantidad   = (int)$cantidad;

        if ($idProducto <= 0 || $cantidad <= 0) {
            return;
        }

        $producto = $this->productoModel->obtenerPorId($idProducto);
        if (!$producto) {
            return;
        }

        if (isset($_SESSION['carrito'][$idProducto])) {
            $_SESSION['carrito'][$idProducto]['cantidad'] += $cantidad;
        } else {
            $_SESSION['carrito'][$idProducto] = [
                'id'       => $producto['id'],
                'nombre'   => $producto['nombre'],
                'precio'   => (float)$producto['precio'],
                'imagen'   => $producto['imagen'],
                'cantidad' => $cantidad
            ];
        }
    }

    public function eliminarProducto($idProducto)
    {
        $idProducto = (int)$idProducto;
        if (isset($_SESSION['carrito'][$idProducto])) {
            unset($_SESSION['carrito'][$idProducto]);
        }
    }

    public function actualizarCantidad($idProducto, $cantidad)
    {
        $idProducto = (int)$idProducto;
        $cantidad   = (int)$cantidad;

        if ($idProducto <= 0) {
            return;
        }

        if ($cantidad <= 0) {
            $this->eliminarProducto($idProducto);
            return;
        }

        if (isset($_SESSION['carrito'][$idProducto])) {
            $_SESSION['carrito'][$idProducto]['cantidad'] = $cantidad;
        }
    }

    public function vaciar()
    {
        $_SESSION['carrito'] = [];
    }

    public function obtenerCarrito()
    {
        return $_SESSION['carrito'];
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($_SESSION['carrito'] as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }
        return $total;
    }
}
