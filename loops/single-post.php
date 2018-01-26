<?php
/**!
 * The Single Posts Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-4 border-bottom pb-3">
      <h1>
        <?php the_title()?>
      </h1>
      <div class="header-meta clearfix">
        <?php
          _e('By ', 'b4st');
          the_author_posts_link();
          echo ' ';
          b4st_post_date();
        ?>

      </div>
    </header>
    <main class="row">
      <div class="col-sm-4 text-muted">
        <i class="far fa-folder-open"></i>&nbsp;
        <?php _e('Category: ', 'b4st'); the_category(', ') ?><br/>
        <?php if ( has_tag() ) {
          ?>
          <i class="far fa-tags"></i>&nbsp;
          <?php the_tags('Tags: ', ', '); ?><br/>
        <?php } ?>
        <i class="far fa-comment"></i>&nbsp;
        <?php _e('Comments', 'b4st'); ?>:
        <?php comments_popup_link(__('None', 'b4st'), '1', '%'); ?><br/>
        <i class="far fa-user"></i>&nbsp;
        <?php _e('Other posts by', 'b4st'); ?>
        <?php the_author_posts_link(); ?>
      </div>
      <div class="col-sm">
        <?php
          the_post_thumbnail();
          the_content();
          wp_link_pages();
        ?>
      </div>
    </main>
    <footer class="footer-meta media border rounded p-3">
      <span class="mr-2"><?php b4st_author_avatar(); ?></span>
      <div class="media-body">
        <p class="h3 author-name"><?php the_author_posts_link(); ?></p>
        <p class="author-description"><?php b4st_author_description(); ?></p>
        <p class="author-other-posts mb-0 border-top pt-3"><?php _e('See other posts by ', 'b4st'); the_author_posts_link(); ?></p>
      </div>
    </footer>
  </article>
<?php
    if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
<div class="row mt-5 border-top pt-3">
  <div class="col">
    <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: '.'%title'); ?>
  </div>
  <div class="col text-right">
    <?php next_post_link('%link', 'Next post: '.'%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
  </div>
</div>
