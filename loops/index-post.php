<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
    <h5>
      <em>
        <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; ?><?php the_author_posts_link(); ?>,</span>
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
      <i class="fa fa-comment"></i>&nbsp;
      <?php _e('Comments', 'b4st'); ?>:
      <?php comments_popup_link(__('None', 'b4st'), '1', '%'); ?><br/>
      <i class="fas fa-user"></i>&nbsp;
      <?php _e('Other posts by', 'b4st'); ?>
      <?php the_author_posts_link(); ?>
    </p>
  </footer>
</article>
