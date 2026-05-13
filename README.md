# 🎵 MusicBio · Slim Framework

Aplicación web dinámica hecha con **Slim 4** y **PHP** que muestra biografías de músicos con datos extraídos de una base de datos **SQLite**.

## Artistas incluidos

- Kurt Cobain
- Anthony Kiedis
- Milo J
- Alan Walker

---

## Vídeo de demostración

(video/videoProyecto.webm)

---

## Estructura del proyecto

```
SLIM/
├── controller/
│   └── ArtistaController.php   - controlador con la lógica de las rutas
├── css/
│   └── style.css               
├── data/
│   ├── Database.php            - conexión PDO a la base de datos
│   ├── database.sql            - script SQL para crear la tabla
│   └── musicos.db              - base de datos SQLite con los artistas
├── public/
│   ├── img/                    
│   └── index.php               - punto de entrada, define las rutas Slim
├── views/
│   ├── layout.php              - plantilla base HTML compartida
│   ├── home.php                - página de inicio con el grid de artistas
│   └── artista.php             - página de detalle con biografía y vídeo
├── vendor/                     - dependencias de Slim
└── composer.json               - configuración del proyecto y autoload
```

---

## Instalación

```bash
composer dump-autoload
php -S localhost:8080 -t public/
```


## Tecnologías

- [Slim Framework 4](https://www.slimframework.com/)

