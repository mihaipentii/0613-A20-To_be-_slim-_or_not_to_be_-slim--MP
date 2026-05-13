<?php

use Slim\Factory\AppFactory;
use App\Controller\ArtistaController;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../data/dbConnect.php';
require __DIR__ . '/../controller/ArtistaController.php';

$app = AppFactory::create();

// Ruta inicio: lista de artistas
$app->get('/', [ArtistaController::class, 'home']);

// Ruta detalle: página de un artista
$app->get('/artista/{slug}', [ArtistaController::class, 'detalle']);

$app->run();