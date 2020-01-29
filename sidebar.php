<?php
/**
 * The Sidebar
 * ===========
 * 
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 *
 * (So, you don't need to set the main column to col-sm-8 or whatever.)
 */
?>

<?php if( is_active_sidebar('main-widget-area') ): ?>
<div id="sidebar" class="sidebar col-sm-4" role="navigation">
  <?php
    b4st_main_widgets_before();
    dynamic_sidebar('main-widget-area');
    b4st_main_widgets_after();
  ?>
</div>
<?php endif; ?>
