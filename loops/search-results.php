<?php
/*
 * The Search Results (Main Header and) Loop
 */
?>

<header class="mb-5 text-center">
  <h1>
    <?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;
  </h1>
</header>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content")?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
    </header>
    <section>
      <?php the_excerpt(); ?>
    </section>
  </article>
<?php endwhile; else: ?>
  <div class="entry-content">
    <article class="alert alert-warning px-3">
      <i class="fas fa-exclamation-triangle"></i> <?php _e('Sorry, your search yielded no results.', 'b4st'); ?>
    </article>
  </div>
<?php endif; ?>
