<?php get_header(); ?>

<div class="container">
  <main class="nine columns">
    <?php
      if(have_posts()) {
        while(have_posts()) {
          the_post(); ?>

          <h2 class="post-title"><?php the_title(); ?></h2>

          <p class="post-info"><?php echo "Published " . get_the_date(); echo " | "; echo "Written by " .  get_the_author(); ?></p>

          <div class="post-feature">
            <?php the_post_thumbnail(); ?>
          </div>

          <?php the_content(); ?>

    <?php
        }//end while loop
      }//end if statement
    ?>
  </main>

  <aside class="three columns">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
