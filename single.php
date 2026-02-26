<?php get_header(); ?>

 <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <a href="archivio.html">Archivio</a> <span>›</span> <span>Articolo</span>
    </div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="article" aria-label="Articolo">
      <div class="head">
        <div class="feature">
          <?php the_post_thumbnail('medium_large'); ?>
          <div class="badge">Notizie</div>
          <div class="date"><?php the_date(); ?></div>
        </div>
      </div>

      <div class="content">
        <h1><?php the_title(); ?></h1>

        <div class="meta">
          <span class="chip">✍️ Redazione</span>
          <span class="chip">📅 Sabato 10 gennaio 2026</span>
          <span class="chip">🗞️ Bauer Zine #01</span>
        </div>

        <?php the_content(); ?>

        <hr class="sep" />

        <div style="display:flex; gap:10px; flex-wrap:wrap">
          <a class="btn" href="archivio.html">← Torna all’archivio</a>
          <a class="btn" href="contatti.html">Invia una segnalazione →</a>
        </div>
      </div>
    </article>

<?php endwhile; endif; ?>

    <section>
        <header class="page-header">
            <h2 class="page-title"><strong>ALTRI ARTICOLI</strong></h2>
        </header>
        <div class="grid" aria-label="Lista notizie">
        <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('partials/post'); ?>
                <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>Nessun articolo trovato.</p>
        <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>