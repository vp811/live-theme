<?php

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="nine columns not-found">
      <h2>Page Not Found</h2>
      <p>This usually never happens. It looks like nothing was found at this location. Would you like to go back <a href="<?php echo home_url('/'); ?>">home</a>?</p>
    </div>

    <div class="three columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

 <?php get_footer(); ?>
