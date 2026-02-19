<?php
/**
 * Template per il singolo articolo (single.php)
 */
get_header ();
?>

<main class="site-main container">
    <section>
        <?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>
        
            <article <?php post_class(); ?>>
                <header class="single-post-header">
                    <h1 class="single-post-title"><?php the_title(); ?></h1>
                    <p class="single-post-meta">
                        Pubblicato il <?php echo get_the_date(); ?>
                        <?php $cats = get_the_category();
                        if ( $cats ) : ?>
                            in <span class="badge"><?php echo esc_html( $cats[0]->name); ?></span>
                        <?php endif; ?>
                    </p>
                </header>
                <div class="single-post-content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php comments_template(); ?>
        
        <?php endwhile; endif; ?>
    </section>

    <?php get_sidebar(); ?>
</main>

<?php get_footer ();?>  