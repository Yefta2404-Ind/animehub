<section class="hero" style="background-image:url('<?= base_url('img/2.jpeg') ?>')" data-aos="zoom-in">
  <div class="hero-overlay">
    <h1>AnimeHub</h1>
    <p>Koleksi Anime Terbaik Sepanjang Masa</p>
    <a href="<?= base_url('/anime') ?>" class="btn-watch">Lihat Koleksi</a>
  </div>
</section>
<section class="poster-row" data-aos="fade-up">
  <div class="poster-track">
    <?php for ($i = 1; $i <= 18; $i++): ?>
      <div class="poster-card">
        <img src="<?= base_url("img/ab$i.jpg") ?>" alt="Anime <?= $i ?>">
        <div class="poster-info">
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <div class="poster-track right">
  <?php for ($i = 1; $i <= 18; $i++): ?>
    <div class="poster-card">
      <img src="<?= base_url("img/ab$i.jpg") ?>" alt="Anime <?= $i ?>">
      <div class="poster-info">
        <!-- Info bisa ditambahkan di sini -->
      </div>
    </div>
  <?php endfor; ?>
</div>
</section>
