<a class="card" href="<?php the_permalink(); ?>">
  <div class="feature">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php endif; ?>
    <div class="badge">Notizie</div>
    <div class="date"><?php the_date(); ?> </div>
  </div>

  <div class="pad">
    <h3><?php the_title(); ?></h3>
    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
    <div class="meta">
      <?php $cats = get_the_category();
    if ( $cats ) : ?>
    <span class="chip">✍️ <?php echo esc_html( $cats[0]->name ); ?></span>
    <?php endif; ?>
      <span class="chip">📌 Lettura breve</span>
    </div>
    <div style="margin-top:12px">
      <span class="btn">Leggi →</span>
    </div>
  </div>
</a>