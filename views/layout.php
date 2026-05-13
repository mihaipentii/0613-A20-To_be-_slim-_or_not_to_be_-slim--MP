<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titol ?? 'MusicBio') ?></title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<header>
    <a href="/"><h1>🎵 Music<span>GOATS</span></h1></a>
    <nav>
        <a href="/">Inicio</a>
    </nav>
</header>

<main>
    <?= $contingut ?? '' ?>
</main>

<footer>
    <p>MusicBio &copy; 2025 · Hecho con <a href="https://www.slimframework.com" target="_blank">Slim Framework</a></p>
</footer>

</body>
</html>