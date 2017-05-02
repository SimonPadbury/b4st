<?php
/*
Remove Query Strings From Static Resources
*/

function _remove_query_strings_1( $src ){ 	
  $rqs = explode( '?ver', $src );
  return $rqs[0];
}

if ( is_admin() ) {
  // Remove query strings from static resources disabled in admin
} else {
  add_filter( 'script_loader_src', '_remove_query_strings_1', 15, 1 );
  add_filter( 'style_loader_src', '_remove_query_strings_1', 15, 1 );
}

function _remove_query_strings_2( $src ) {
  $rqs = explode( '&ver', $src );
  return $rqs[0];
}

if ( is_admin() ) {
  // Remove query strings from static resources disabled in admin
} else {
  add_filter( 'script_loader_src', '_remove_query_strings_2', 15, 1 );
  add_filter( 'style_loader_src', '_remove_query_strings_2', 15, 1 );
}
