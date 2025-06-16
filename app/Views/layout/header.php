<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AnimeHub</title>

  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <?php if (isset($is_detail_page) && $is_detail_page): ?>
    <link rel="stylesheet" href="<?= base_url('css/detail.css') ?>">
  <?php endif; ?>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="site-header" data-aos="fade-down">
  <div class="container">
    <div class="logo">
      <a href="<?= base_url('/') ?>">Anime<span style="color:#f9d342;">Hub</span></a>
    </div>
    
    <nav class="nav" id="nav-menu">
      <a href="<?= base_url('/') ?>">Beranda</a>
      <a href="<?= base_url('/anime') ?>">Anime</a>
      <a href="<?= base_url('/tentang') ?>">Tentang</a>
      <a href="<?= base_url('/kontak') ?>">Kontak</a>
    </nav>

    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</header>
