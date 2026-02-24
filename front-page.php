<?php get_header (); ?>




  <section class="hero" aria-label="Hero">
    <div class="container hero-grid">
      <div class="hero-card">
        <div class="pad">
          <h1 class="bighead">Notizie, info e curiosità… raccontate dagli studenti.</h1>
          <p class="lead">
            Benvenuti su <strong>Bauer Zine</strong>: una fanzine fatta di micro-storie, aggiornamenti utili e
            cose strane (ma vere) che succedono tra aule e corridoi.
          </p>
          <div class="sticker-row" aria-label="Sticker">
            <span class="sticker">🗞️ Notizie vere</span>
            <span class="sticker alt">🧭 Info utili</span>
            <span class="sticker pink">🧠 Curiosità</span>
          </div>
          <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap">
            <a class="btn" href="<?php echo get_permalink( get_page_by_path('archivio') ); ?>">Sfoglia l'archivio →</a>
            <a class="btn" href="<?php echo get_permalink( get_page_by_path('contatti') ); ?>">Invia una segnalazione →</a>
          </div>
        </div>
      </div>

      <aside class="hero-side">
        <div class="note">
          <h3>In questo numero</h3>
          <ul>
            <li>Nuovi club pomeridiani</li>
            <li>Intervista al preside</li>
            <li>Guida mensa &amp; snack</li>
            <li>Curiosità sulla scuola Bauer</li>
          </ul>
        </div>
        <div class="note">
          <h3>Mini-regole redazione</h3>
          <ul>
            <li>Testi brevi, chiari, divertenti</li>
            <li>Niente nomi di compagni senza permesso</li>
            <li>Foto: solo se autorizzate</li>
          </ul>
        </div>
      </aside>
    </div>
  </section>

  <main class="container">
    <h2 class="section-title">In evidenza</h2>
    <p class="muted" style="margin-top:0">Una selezione di articoli per partire subito.</p>
    <div class="grid" aria-label="Articoli in evidenza">

<?php
$query = new WP_Query([
  'posts_per_page' => 6
]);

if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
?>
  <a class="card" href="<?php the_permalink(); ?>">
    <div class="feature">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php endif; ?>
      <div class="badge">
        <?php the_category(', '); ?>
      </div>
      <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
    </div>

    <div class="pad">
      <h3><?php the_title(); ?></h3>
      <p><?php echo get_the_excerpt(); ?></p>

      <div class="meta">
        <span class="chip">✍️ <?php the_author(); ?></span>
        <span class="chip">📌 Lettura breve</span>
      </div>

      <div style="margin-top:12px">
        <span class="btn">Leggi →</span>
      </div>
    </div>
  </a>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>

  </main>



<?php get_footer(); ?>
