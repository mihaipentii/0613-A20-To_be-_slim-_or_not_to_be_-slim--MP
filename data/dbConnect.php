<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instancia = null;

    // Devuelve la conexión PDO (singleton)
    public static function obtenerConexion(): PDO
    {
        if (self::$instancia === null) {
            $rutaBD = __DIR__ . '/../database/musicos.db';

            try {
                self::$instancia = new PDO('sqlite:' . $rutaBD);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Error al conectar con la base de datos: ' . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}