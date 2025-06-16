<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang Kami – AnimeHub</title>
  <link rel="stylesheet" href="<?= base_url('css/about.css') ?>">
</head>
<body class="about-body">

<div class="about-wrapper">

  <!-- HERO dengan poster berjalan -->
  <section class="about-hero">
    <div class="about-poster-row">
      <div class="about-poster-track">
        <?php for ($i = 1; $i <= 6; $i++): ?>
          <img src="<?= base_url("img/ab$i.jpg") ?>" alt="Poster <?= $i ?>">
        <?php endfor; ?>
        <?php for ($i = 1; $i <= 6; $i++): ?>
          <img src="<?= base_url("img/ab$i.jpg") ?>" alt="Poster <?= $i ?>">
        <?php endfor; ?>
      </div>
    </div>


  </section>

  <!-- HEADLINE -->
  <section class="about-section">
    <h2>AnimeHub memukau semua orang—lagi dan lagi.</h2>
    <p>Apapun mood‑mu, AnimeHub menyuguhkan daftar anime terbaik yang bikin kamu ketagihan.
       Hiburan yang selalu dinanti dan tak pernah habis dibicarakan.</p>
  </section>

  <!-- VISI / MISI dalam CARD -->
  <section class="about-card-container">
    <div class="about-card">
      <h3>🗂️ Konten Terkurasi</h3>
      <p>Koleksi anime pilihan, selalu diperbarui setiap minggu.</p>
    </div>
    <div class="about-card">
      <h3>⚡ Super Responsif</h3>
      <p>Desain modern yang cepat, ringan dan mobile‑friendly.</p>
    </div>
    <div class="about-card">
      <h3>🤝 Komunitas Positif</h3>
      <p>Tempat ngobrol, diskusi, dan berbagi hype tanpa toxic.</p>
    </div>
  </section>

  <!-- CTA -->
  <section class="about-section about-cta">
    <h3>Bergabung Bersama Kami!</h3>
    <p>Ikuti AnimeHub di media sosial dan jadilah bagian dari komunitas anime
       terbesar di Indonesia.</p>
    <a href="#" class="about-btn">Ikuti Kami di Instagram</a>
  </section>

</div>

</body>
</html>
