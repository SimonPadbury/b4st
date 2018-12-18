<?php
/*
 * The Search Results Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
    </header>
    <section>
      <?php the_excerpt(); ?>
    </section>
  </article>
<?php endwhile; else: ?>
  <article class="alert alert-warning">
    <i class="fas fa-exclamation-triangle"></i> <?php _e('Sorry, your search yielded no results.', 'b4st'); ?>
  </article>
<?php endif; ?>
