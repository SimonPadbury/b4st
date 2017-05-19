<?php get_header(); ?>

	<div class="container">
	  <div class="row">

	    <div class="col-sm-8">

			<header class="page-header">
				<h1>
                    <?php echo sprintf(__('Author %s', 'b4st'), '<strong>' . get_the_author_meta('user_nicename', get_query_var('author')) . '</strong>'); ?>
				</h1>
			</header><!-- .page-header -->
            <?php if(have_posts()): ?>
               <?php get_template_part('loops/content', get_post_format()); ?>
            <?php else: ?>
               <?php get_template_part('loops/content', 'none'); ?>
            <?php endif; ?>
		</div>

		<div class="col-sm-4" id="sidebar">
		   <?php get_sidebar(); ?>
		</div>

	  </div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
