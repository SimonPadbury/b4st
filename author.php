<?php
$userInfo = get_userdata( get_query_var('author'));
$isAuthor = true;
if (
    !in_array('contributor', $userInfo -> roles) &&
    !in_array('administrator', $userInfo -> roles) &&
    !in_array('author', $userInfo -> roles) &&
    !in_array('editor', $userInfo -> roles)
) {
    $isAuthor = false;
    wp_redirect(get_bloginfo('url').'/404', 404);
}
?>
  <?php get_header(); ?>

  <div class="container">
    <div class="row">

      <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">

        <div id="content" role="main">
          <header>
            <?php if ($isAuthor === true): ?>
            <h1>
              <?php echo sprintf(__('Author: %s', 'b4st'), get_the_author_meta('user_nicename', $userInfo -> data -> ID)); ?>
              <hr/>
              <?php echo $curauth->display_name; ?>
              <hr/>
            </h1>
            <?php endif; ?>
          </header>
          <?php if(have_posts()): ?>
            <?php get_template_part('loops/index-loop'); ?>
          <?php else: ?>
            <?php get_template_part('loops/index-none'); ?>
          <?php endif; ?>

        </div><!-- /#content -->
      </div>

      <div class="col-sm-4" id="sidebar">
        <?php get_sidebar(); ?>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <?php get_footer(); ?>
