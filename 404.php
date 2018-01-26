<?php get_header(); ?>

<div class="container-responsive mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1>
            <i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'b4st'); ?> 404
          </h1>
          <p><?php _e('The page you were looking for does not exist.', 'b4st'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
