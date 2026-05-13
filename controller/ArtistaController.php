<?php

namespace App\Controller;

use App\Database;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ArtistaController
{
    // Página de inicio: muestra los 4 artistas con foto y nombre
    public function home(Request $request, Response $response, array $args): Response
    {
        $db = Database::obtenerConexion();

        $stmt = $db->query('SELECT id, nombre, slug, genero, imagen_url FROM artistas ORDER BY nombre');
        $artistas = $stmt->fetchAll();

        ob_start();
        require __DIR__ . '/../views/home.php';
        $contenido = ob_get_clean();

        $response->getBody()->write($contenido);
        return $response;
    }

    // Página de detalle: muestra la info completa + vídeo del artista
    public function detalle(Request $request, Response $response, array $args): Response
    {
        $db = Database::obtenerConexion();

        $slug = $args['slug'];
        $stmt = $db->prepare('SELECT * FROM artistas WHERE slug = ?');
        $stmt->execute([$slug]);
        $artista = $stmt->fetch();

        if (!$artista) {
            $response->getBody()->write('<h1>Artista no encontrado</h1>');
            return $response->withStatus(404);
        }

        ob_start();
        require __DIR__ . '/../views/artista.php';
        $contenido = ob_get_clean();

        $response->getBody()->write($contenido);
        return $response;
    }
}