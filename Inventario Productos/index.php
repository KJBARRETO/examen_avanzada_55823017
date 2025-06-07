<?php
require_once './controllers/ProductoController.php';

$accion = $_GET['accion'] ?? 'listar';
$controlador = new ProductoController();
$controlador->manejarSolicitud($accion);