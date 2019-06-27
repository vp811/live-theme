<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="nine columns">
      <?php
        if(have_posts()){
          while(have_posts()) {
            the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content();
          }//while
        }//if
      ?>
    </div>

    <aside class="three columns">
      <?php get_sidebar(); ?>
    </aside>

  </div>
</div>

<?php get_footer(); ?>
