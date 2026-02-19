<?php get_header();?>

<main class="site-main container">
    <section>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>
                <header class="page-header">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </header>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </section>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>