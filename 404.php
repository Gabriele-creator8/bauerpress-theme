<?php get_header(); ?>

<main class="site-main container">
    <section>
        <header class="page-header">
            <h2 class="page-title">Pagina non trovata</h2>
        </header>

        <div class="page-content">
            <p class="error-code">404</p>
            <p class="error-message">Ops! La pagina che stai cercando non esiste.</p>
            <p>Nella versione WordPress, questo è il template<strong>404.php</strong>.</p>
            <p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    Torna alla Homepage
                </a>
            </p>
        </div>
    </section>

    <aside class="sidebar">
        <section class="sidebar_section">
            <h3>Cerca nel sito</h3>
            <?php get_search_form(); ?>
        </section>
    </aside>
</main>

<?php get_footer(); ?>