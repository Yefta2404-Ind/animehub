<footer class="site-footer" data-aos="fade-up">
  <div class="footer-container">
    <div class="footer-brand">
      <h2><span style="color:#f9d342;">Anime</span>Hub</h2>
      <p>Tempat terbaik untuk menemukan anime favoritmu.</p>
    </div>
    <div class="footer-nav">
      <a href="<?= base_url('/') ?>">Beranda</a>
      <a href="<?= base_url('/anime') ?>">Anime</a>
      <a href="<?= base_url('/tentang') ?>">Tentang</a>
      <a href="<?= base_url('/kontak') ?>">Kontak</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?= date('Y') ?> AnimeHub. Dibuat dengan ❤️ oleh Anime Fans Indonesia.</p>
  </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
