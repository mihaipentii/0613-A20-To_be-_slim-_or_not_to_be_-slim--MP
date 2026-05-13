<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use App\Database;

require __DIR__ . '/../vendor/autoload.php';

// Crear la app Slim
$app = AppFactory::create();

// Configurar Twig
$twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

// RUTA: página principal → lista de artistas
$app->get('/', function ($request, $response, $args) {
    $db = Database::obtenerConexion();

    $stmt = $db->query('SELECT id, nombre, slug, genero, origen, imagen_url, bio_corta FROM artistas ORDER BY nombre');
    $artistas = $stmt->fetchAll();

    $view = Twig::fromRequest($request);
    return $view->render($response, 'home.html.twig', [
        'artistas' => $artistas,
    ]);
});

// RUTA: página de un artista por slug
$app->get('/artista/{slug}', function ($request, $response, $args) {
    $db = Database::obtenerConexion();

    $slug = $args['slug'];
    $stmt = $db->prepare('SELECT * FROM artistas WHERE slug = ?');
    $stmt->execute([$slug]);
    $artista = $stmt->fetch();

    // Si no existe el artista sale 404
    if (!$artista) {
        return $response->withStatus(404)->getBody()->write('Artista no encontrado.');
    }

    $view = Twig::fromRequest($request);
    return $view->render($response, 'artista.html.twig', [
        'artista' => $artista,
    ]);
});

$app->run();