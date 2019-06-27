<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="nine columns">
      <h2>Latest Posts</h2>
      <?php
        if(have_posts()) {
          while(have_posts()) {
            the_post(); ?>

            <div class="posts">
              <h3 class="post-title"><?php the_title(); ?></h3>

              <p class="post-info"><?php echo "Published " . get_the_date(); echo " | "; echo "Written by: " . get_the_author(); ?></p>

             <div class="post-feature">
               <?php the_post_thumbnail();

               // Large = 1024x1024
               //Thumbnail = 150 x 150
               //medium_large = 768px x 0
               ?>
             </div>

             <?php the_excerpt(); ?>

             <a class="button button-primary u-full-width" href="<?php the_permalink(); ?>">Read More >></a>

           </div>
      <?php
          }//ends the while loop
        }//ends the if statement
      ?>
    </div>

    <aside class="three columns">
      <?php get_sidebar(); ?>
    </aside>


</div>

<?php get_footer(); ?>
