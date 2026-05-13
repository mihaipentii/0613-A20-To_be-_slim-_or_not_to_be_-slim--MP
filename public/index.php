<?php

use Slim\Factory\AppFactory;
use App\Controller\ArtistaController;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Ruta inicial con la lista de artistas
$app->get('/', [ArtistaController::class, 'home']);

// Ruta a la página con la info detallada de un artista
$app->get('/artista/{slug}', [ArtistaController::class, 'detalle']);

$app->run();