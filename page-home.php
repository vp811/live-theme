<?php /*Template Name: Homepage Template*/ ?>

<?php get_header(); ?>

<!-- Non-Container Hero Image -->
<div class="hero-image-wrap">
  <?php dynamic_sidebar('hero-image'); ?>
</div>

<div class="container">

  <!-- About Us Text Block -->
  <div class="row">

    <div class="tweleve columns">
      <?php dynamic_sidebar('about-us-text'); ?>
    </div>

  </div>

  <!-- Interior Pages Section -->
  <div class="row">

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-left-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-middle-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-right-home'); ?>
    </div>

  </div>

</div>

<?php get_footer(); ?>
