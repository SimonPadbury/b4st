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
  wp_redirect(esc_url( home_url() ) . '/404', 404);
}
?>
<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="mt-5">

  <header class="mb-5 text-center">
    <?php if ($isAuthor === true): ?>
      <h1>
      <?php _e('Posts by: ', 'b4st'); echo get_the_author_meta( 'display_name' ); ?>
      </h1>
    <?php endif; ?>
  </header>

  <?php
    if(have_posts()):
      get_template_part('loops/index-loop');
    else:
      get_template_part('loops/index-none');
    endif;
  ?>

  <?php
  /*
  Did you want a traditional article-plus-sidebar layout?
  =======================================================
  Use this below instead of the one line above -- and 
  remove some of the CSS styles controlling `.entry-content`
  
  <div class="container">
    <div class="row"> 
      <div class="col-sm">
        <div id="content" role="main">
          <header class="mb-5">
            <?php if ($isAuthor === true): ?>
            <h1>
              <?php _e('Posts by: ', 'b4st'); echo get_the_author_meta( 'display_name' ); ?>
            </h1>
            <?php endif; ?>
          </header>
          <?php if(have_posts()): ?>
            <?php get_template_part('loops/index-loop'); ?>
          <?php else: ?>
            <?php get_template_part('loops/index-none'); ?>
          <?php endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  */
  ?>

</main>

<?php 
  b4st_main_after();

  if(is_active_sidebar('main-widget-area')): ?>
  <section id="site-main-widgets" class="bg-light">
    <div class="container">
      <div class="row pt-5 pb-4" id="main-widget-area" role="navigation">
        <?php
          b4st_main_widgets_before();
          dynamic_sidebar('main-widget-area');
          b4st_main_widgets_after();
        ?>
      </div>
    </div>
  </section>
  <?php endif;

  get_footer(); 
?>
