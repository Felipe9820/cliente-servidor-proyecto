<?php

require_once __DIR__ . '/../includes/app.php';

require __DIR__ . '/../controllers/PaginasController.php';
require __DIR__ . '/../Router.php';

use Controllers\PaginasController;

use MVC\Router;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/propiedades', [PaginasController::class, 'propiedades']);
$router->get('/blog', [PaginasController::class,'blog']);
$router->get('/entrada', [PaginasController::class,'entrada']);

$router->comprobarRutas();