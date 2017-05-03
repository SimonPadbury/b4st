<footer class="container">
  <hr/>

	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="row">
    <div class="col">
      <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
