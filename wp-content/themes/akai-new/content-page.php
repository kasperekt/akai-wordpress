<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1><?php the_title(); ?></h1>

  <div class="entry-content">
    <?php
      the_content();
    ?>
  </div>
</article>
