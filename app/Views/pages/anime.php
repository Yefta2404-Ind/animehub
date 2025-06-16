<section class="hero" style="background-image:url('<?= base_url('img/2.jpeg') ?>')" data-aos="zoom-in">
</section>
<section class="section" data-aos="fade-up">
  <div class="anime-grid">
    <?php foreach ($animes as $i => $a): ?>
      <a href="<?= base_url('anime/'.$a['slug']) ?>"
         class="anime-card"
         data-aos="zoom-in"
         data-aos-delay="<?= ($i%6)*100 ?>">
        <img src="<?= base_url('img/'.$a['img']) ?>" alt="<?= esc($a['title']) ?>">
        <div class="anime-title"><?= esc($a['title']) ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</section>
