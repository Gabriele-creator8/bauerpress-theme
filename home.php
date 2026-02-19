<?php
/**
 * Template per la pagina del blog (home.php)
*/
get_header();
?>

<main class="site-main container">
    <section>
        <header class="page-header">
            <h2 class="page-title">Blog</h2>
            <p class="page-subtitle">
                Qui verrà mostrato l'elenco degli articoli (template<strong>home.php</strong> in WordPress).
            </p>
        </header>
        
        <?php if ( have_posts() ) : ?>
            <ul class="post-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="post-card">
                        <h3 class="post-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title();
        ?></a>
                        </h3>
                        <p class="post-card-meta">
                            Pubblicato il <?php echo get_the_date(); ?>
                            <?php $cats = get_the_category();
                            if ( $cats ) : ?>
                                in <span class="badge"><?php echo esc_html($cats[0]->name ); ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="post-card-excerpt">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi tutto</a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>Nessun articolo trovato.</p>
        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>