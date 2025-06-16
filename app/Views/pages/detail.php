<?php $a = $anime; ?>
<link rel="stylesheet" href="<?= base_url('css/detail.css') ?>">
<section class="hero" style="background-image:url('<?= base_url('img/2.jpeg') ?>')" data-aos="zoom-in">
</section>
<div class="detail-container" data-aos="fade-up">
  <div class="detail-content">
    <div class="detail-image">
      <img src="<?= base_url('img/' . $a['img']) ?>" alt="<?= esc($a['title']) ?>">
    </div>
    <div class="detail-description">
      <h1><?= esc($a['title']) ?></h1>
      <p><strong>Genre:</strong> <?= esc($a['genre']) ?></p>
      <p><strong>Musim Rilis:</strong> <?= esc($a['season']) ?></p>
      <p><strong>Episode:</strong> <?= esc($a['episodes']) ?></p>
      <p><?= esc($a['synopsis']) ?></p>
      <a href="<?= base_url('anime') ?>" class="back-link">← Kembali ke Daftar</a>
    </div>
  </div>

  <?php if (!empty($a['trailer_url'])): ?>
    <section class="trailer-section" data-aos="zoom-in-up">
      <h2>Trailer</h2>
      <div class="video-wrapper">
        <iframe
          src="<?= esc($a['trailer_url']) ?>"
          title="Trailer <?= esc($a['title']) ?>"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </section>
  <?php endif; ?>
</div>
