<?php get_header(); ?>

<main class="site-main container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <a href="archivio.html">Notizie</a>
    </div>
    <section>
        <header class="page-header">    
        <h2 class="page-title"><strong>NOTIZIE</strong></h2>
            <p class="page-subtitle">
                <strong>Progetti, iniziative, aggiornamenti (sempre in versione “zine”).</strong>
            </p>
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