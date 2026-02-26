<a class="card" href="<?php the_permalink(); ?>">
  <div class="feature">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php endif; ?>
      <?php the_category(', '); ?>
    </div>
    
    <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>

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