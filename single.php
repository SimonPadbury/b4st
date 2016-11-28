<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="col-md-8">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-4" id="sidebar">
       <?php get_sidebar(); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
