<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.
*/
?>

  <?php if(have_posts()): while(have_posts()): the_post();?>
  <article role="article" id="post_<?php the_ID()?>">
    <header>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title()?>
        </a>
      </h2>
      <h5>
        <em>
          <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; the_author() ?>,</span>
          <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
        </em>
      </h5>
    </header>
    <section>
      <?php the_post_thumbnail(); ?>
      <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="fas fa-arrow-right"></i>', 'b4st' ) ); ?>
    </section>
    <footer>
      <p class="text-muted" style="margin-bottom: 20px;">
        <i class="fas fa-folder-open"></i>&nbsp;
        <?php _e('Category', 'b4st'); ?>:
        <?php the_category(', ') ?><br/>
        <i class="fas fa-comment"></i>&nbsp;
        <?php _e('Comments', 'b4st'); ?>:
        <?php comments_popup_link(__('None', 'b4st'), '1', '%'); ?>
      </p>
    </footer>
  </article>
  <?php endwhile; ?>

  <?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="page-item older">
      <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
    <li class="page-item newer">
      <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fas fa-arrow-right"></i>') ?></li>
  </ul>
  <?php } ?>

  <?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>
