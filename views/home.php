<?php
/** @var array $artistas */
$titol = 'MusicBio · Inicio';

ob_start();
?>

<div class="hero">
    <h2>Biografías de nuestros <span>músicos</span> favoritos</h2>
</div>

<div class="grid-artistas">
    <?php foreach ($artistas as $artista): ?>
    <a class="card" href="/artista/<?= htmlspecialchars($artista['slug']) ?>">
        <img
            src="/img/<?= htmlspecialchars(basename($artista['imagen_url'])) ?>"
            alt="Foto de <?= htmlspecialchars($artista['nombre']) ?>"
            onerror="this.src='https://placehold.co/400x260/1a1a2e/e94560?text=<?= urlencode($artista['nombre']) ?>'">
        <div class="card-body">
            <div class="card-nombre"><?= htmlspecialchars($artista['nombre']) ?></div>
            <div class="card-genero"><?= htmlspecialchars($artista['genero']) ?></div>
            <span class="ver-mas">Ver biografía →</span>
        </div>
    </a>
    <?php endforeach; ?>
</div>

<?php
$contingut = ob_get_clean();
require __DIR__ . '/layout.php';