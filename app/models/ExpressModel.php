<?php
require_once __DIR__ . '/../../config/database.php';

class ExpressModel {

    private $pdo;

    public function __construct() {
        $this->pdo = getPDOConnection();
    }

    public function listarProductos() {
        $sql = "SELECT id, nombre, precio FROM productos ORDER BY nombre";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function guardarPedidoExpress($cliente, $telefono, $direccion, $producto_id, $cantidad) {

        $sqlProd = "SELECT precio FROM productos WHERE id = ?";
        $stmtProd = $this->pdo->prepare($sqlProd);
        $stmtProd->execute([$producto_id]);
        $precio = $stmtProd->fetchColumn();

        if (!$precio) return false;

        $total = $precio * $cantidad;

        $sql = "INSERT INTO pedidos (usuario_id, nombre_cliente, telefono, direccion, total, estado)
                VALUES (NULL, ?, ?, ?, ?, 'pendiente')";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente, $telefono, $direccion, $total]);

        $pedido_id = $this->pdo->lastInsertId();

        $sqlDet = "INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio_unitario, subtotal)
                   VALUES (?, ?, ?, ?, ?)";

        $stmtD = $this->pdo->prepare($sqlDet);
        return $stmtD->execute([$pedido_id, $producto_id, $cantidad, $precio, $total]);
    }
}
