<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Kami - AnimeHub</title>
  <link rel="stylesheet" href="<?= base_url('css/kontak.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="kontak-body">

  <!-- HERO BANNER -->
  <section class="kontak-hero" style="background-image: url('<?= base_url('img/2.jpeg') ?>')">
    <div class="kontak-hero-overlay">
      <h1 data-aos="zoom-in">Hubungi Kami</h1>
    </div>
  </section>

  <!-- KONTEN UTAMA -->
  <div class="kontak-container">

    <div class="kontak-card" data-aos="fade-up">
      <i class="fas fa-envelope kontak-icon"></i>
      <h3>Email</h3>
      <p>info@company.com</p>
    </div>

    <div class="kontak-card" data-aos="fade-up" data-aos-delay="100">
      <i class="fas fa-phone kontak-icon"></i>
      <h3>Telepon</h3>
      <p>0812-3456-7890</p>
    </div>

    <div class="kontak-card" data-aos="fade-up" data-aos-delay="200">
      <i class="fas fa-map-marker-alt kontak-icon"></i>
      <h3>Alamat</h3>
      <p>Jl. Teknologi No. 123, Pekanbaru</p>
    </div>

  </div>

</body>
</html>
