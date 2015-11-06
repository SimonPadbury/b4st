<?php
/*
Inserting Bootstrap 4 classes into the WordPress menu
*/

function add_navbar_li_classes($classes) {
     if ( in_array('current-menu-item', $classes) ) {
             $classes[] = 'nav-item active';
     } else {
             $classes[] = 'nav-item';         
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'add_navbar_li_classes' , 10 , 2);

function add_nav_link($a_class) {
    return preg_replace('/<a /', '<a class="nav-link"', $a_class);
}
add_filter('wp_nav_menu','add_nav_link');

/*
Register Navbar
*/

register_nav_menu('navbar', __('Navbar', 'b4st'));