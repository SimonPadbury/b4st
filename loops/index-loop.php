<?php
/*
 * The Default Loop (used by index.php, category.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] block within blog posts.
 */
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <?php get_template_part('loops/index-post', get_post_format()); ?>

  <?php endwhile; ?>

  <nav class="container border-top pt-2 pb-5">
    <div class="text-left"><?php next_posts_link('<i class="fas fa-angle-left"></i> Older posts') ?></div>
    <div class="text-right"><?php previous_posts_link('Newer posts <i class="fas fa-angle-right"></i>') ?></div>
  </nav>

  <?php
  else :
    get_template_part('loops/404');
  endif;
?>
