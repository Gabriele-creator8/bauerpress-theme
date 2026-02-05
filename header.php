<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo( 'name' ); - Home?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <?php wp_head(); ?>
</head>
<body <? body_class(); ?>>
    
  <header>
  <div class="container">
    <div class="topbar">
      <a class="mast" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Vai alla Home Bauer Zine">
        <?php bloginfo( 'name' ); ?>
        <span class="logo" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M12 2l2.7 5.7L21 10l-4.6 4.5 1.1 6.5L12 18.8 6.5 21l1.1-6.5L3 10l6.3-2.3L12 2z"/>
          </svg>
        </span>
        <span class="title">
          <strong>BAUER ZINE</strong>
          <span>La fanzine degli studenti</span>
        </span>
      </a>

      <div class="issue" aria-label="Numero della fanzine">
        <span class="dot" aria-hidden="true"></span>
        Numero 01 · Gennaio 2026
      </div>
    </div>

    <nav aria-label="Menu">
      <div class="navlinks">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'fallback_cb' => false,
            'items_wrap' => '%3$s',
        ) );
        ?>
    </nav>
  </div>
</header>