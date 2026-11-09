<?php

// Usar __DIR__ asegura que siempre encuentre los archivos sin importar la URL amigable
require_once __DIR__ . "/config/app.php";
require_once "app/controllers/viewsController.php";

$plantilla = new viewsController();
$plantilla->obtener_plantilla_controlador();