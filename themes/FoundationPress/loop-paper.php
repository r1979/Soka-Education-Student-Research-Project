<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</li>
