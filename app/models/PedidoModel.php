<?php
require_once __DIR__ . '/../../config/database.php';

class PedidoModel
{
    private $db;

    public function __construct()
    {
        $this->db = getPDOConnection();
    }

    public function crearPedido(array $datosCliente, array $itemsCarrito, $usuarioId = null)
    {
        if (empty($itemsCarrito)) {
            throw new Exception('El carrito está vacío');
        }

        $this->db->beginTransaction();

        try {
            $total = 0;
            foreach ($itemsCarrito as $item) {
                $total += $item['precio'] * $item['cantidad'];
            }

            $sqlPedido = "INSERT INTO pedidos (usuario_id, nombre_cliente, telefono, direccion, total)
                          VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($sqlPedido);
            $stmt->execute([
                $usuarioId,
                $datosCliente['nombre_cliente'],
                $datosCliente['telefono'],
                $datosCliente['direccion'],
                $total
            ]);

            $pedidoId = $this->db->lastInsertId();

            $sqlDetalle = "INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio_unitario, subtotal)
                           VALUES (?, ?, ?, ?, ?)";
            $stmtDetalle = $this->db->prepare($sqlDetalle);

            foreach ($itemsCarrito as $item) {
                $subtotal = $item['precio'] * $item['cantidad'];
                $stmtDetalle->execute([
                    $pedidoId,
                    $item['id'],
                    $item['cantidad'],
                    $item['precio'],
                    $subtotal
                ]);
            }

            $this->db->commit();
            return $pedidoId;

        } catch (PDOException $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}
