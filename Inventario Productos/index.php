<?php
require_once './Controller/ControllerProducto.php';
require_once './Model';


$accion = $_GET['accion'] ?? 'listar';
$controlador = new ProductoController();
$controlador->manejarSolicitud($accion);

