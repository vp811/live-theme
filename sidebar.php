<div class="sidebar">
    <?php
      if(is_page('about-us')){
        dynamic_sidebar('sidebar-page');
      }elseif(is_single()){
        dynamic_sidebar('sidebar-post');
      }else{
        dynamic_sidebar('sidebar');
      }
    ?>
</div>
