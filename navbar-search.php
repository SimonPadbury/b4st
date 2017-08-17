<?php
/*
Navbar search form
==================
If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in `header.php`.
You can then insert the Search Widget into the sidebar.
*/
?>

<form class="form-inline  my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
  <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-secondary my-2 my-sm-0">
    <i class="fa fa-search"></i>
  </button>
</form>
