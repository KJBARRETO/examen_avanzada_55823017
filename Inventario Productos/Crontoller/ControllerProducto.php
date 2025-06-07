<?php
require_once './models/Producto.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function manejarSolicitud($accion) {
        switch ($accion) {
            case 'guardar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nombre = $_POST['nombre'] ?? '';
                    $cantidad = (int)($_POST['cantidad'] ?? 0);
                    $precio = (float)($_POST['precio'] ?? 0);

                    $this->modelo->guardar($nombre, $cantidad, $precio);
                    header("Location: index.php?accion=listar");
                    exit();
                }
                break;

            case 'formulario':
                include './views/form.php';
                break;

            case 'listar':
            default:
                $productos = $this->modelo->obtenerTodos();
                include './views/tabla.php';
                break;
            }
        }
    }