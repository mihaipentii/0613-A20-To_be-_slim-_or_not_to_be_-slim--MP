<?php
/** @var array $artista */
$titol = htmlspecialchars($artista['nombre']) . ' · MusicBio';

ob_start();
?>

<a class="back-link" href="/">← Volver al inicio</a>

<div class="artista-header">
    <img
        class="artista-foto"
        src="/img/<?= htmlspecialchars(basename($artista['imagen_url'])) ?>"
        alt="Foto de <?= htmlspecialchars($artista['nombre']) ?>"
        onerror="this.src='https://placehold.co/280x320/1a1a2e/e94560?text=<?= urlencode($artista['nombre']) ?>'">

    <div class="artista-info">
        <div class="artista-nombre"><?= htmlspecialchars($artista['nombre']) ?></div>
        <div class="artista-genero"><?= htmlspecialchars($artista['genero']) ?></div>

        <div class="artista-datos">
            <div class="dato">
                <span class="dato-label">🎂 Nacimiento</span>
                <span class="dato-valor"><?= htmlspecialchars($artista['nacimiento']) ?></span>
            </div>
            <div class="dato">
                <span class="dato-label">📍 Origen</span>
                <span class="dato-valor"><?= htmlspecialchars($artista['origen']) ?></span>
            </div>
            <div class="dato">
                <span class="dato-label">🎵 Género</span>
                <span class="dato-valor"><?= htmlspecialchars($artista['genero']) ?></span>
            </div>
        </div>

        <div class="artista-bio-corta"><?= htmlspecialchars($artista['bio_corta']) ?></div>
    </div>
</div>

<div class="seccion">
    <h3>Biografía</h3>
    <div class="bio-larga"><?= $artista['bio_larga'] ?></div>
</div>

<?php if (!empty($artista['youtube_embed'])): ?>
<div class="seccion">
    <h3>🎬 Vídeo destacado</h3>
    <div class="video-wrapper">
        <iframe
            src="<?= htmlspecialchars($artista['youtube_embed']) ?>"
            title="Vídeo de <?= htmlspecialchars($artista['nombre']) ?>"
            allowfullscreen
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
        </iframe>
    </div>
</div>
<?php endif; ?>

<?php
$contingut = ob_get_clean();
require __DIR__ . '/layout.php';