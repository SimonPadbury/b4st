<?php
/**!
 * The Sidebar
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 */
?>

<?php if( is_active_sidebar('sidebar-widget-area') ): ?>
<div class="sidebar col-sm-3" id="sidebar" role="navigation">
  <?php dynamic_sidebar('sidebar-widget-area'); ?>
</div>
<?php endif; ?>
