<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instancia = null;

    public static function obtenerConexion(): PDO
    {
        if (self::$instancia === null) {
            $ruta = __DIR__ . '/musicos.db';

            try {
                self::$instancia = new PDO('sqlite:' . $ruta);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Error de base de datos: ' . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}