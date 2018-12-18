<?php
/*
 * Split Post Pagination
 */

add_filter('wp_link_pages', 'b4st_split_post_pagination');
function b4st_split_post_pagination($wp_links){
	global $post;

	$post_base = trailingslashit( get_site_url(null, $post->post_name) );
	$wp_links = trim(str_replace(array('<p>Pages: ', '</p>'), '', $wp_links));

	if ( empty($wp_links) ) {
		return '';
  }

	// Split links at spaces
	$splits = explode(' ', $wp_links );
	$links = array();
	$current_page = 1;

	// Loop over split array, correct and rejoin split links
	foreach( $splits as $key => $split ){
		if( is_numeric($split) ) {
			$links[] = $split;
			$current_page = $split;
		} else if ( strpos($split, 'href') === false ) {
			$links[] = $split . ' ' . $splits[$key + 1];
		}
	}

	$num_pages = count($links);

	// Start UL
	$output .= '<ul class="pagination justify-content-center mt-5">';

	// Page status
	$output .= '<li class="page-item disabled"><a class="page-link">Page ' . $current_page . ' of ' . $num_pages . '</a></li>';

  // Skip to first
  if ( $current_page == 1 ) {
		$output .= '<li class="page-item disabled"><a class="page-link">';
	} else {
		$output .= '<li class="page-item"><a class="page-link" href="' . $post_base . '">';
  }
	$output .= '<i class="fas fa-angle-double-left"></i></a></li>';

  // Prev
	if ( $current_page == 1 ) {
		$output .= '<li class="page-item disabled"><a class="page-link">';
	} else {
		$output .= '<li class="page-item"><a class="page-link" href="' . $post_base . ($current_page - 1) . '">';
  }
	$output .= '<i class="fas fa-angle-left"></i></a></li>';

  // Pagination
  foreach( $links as $key => $link ) {
    $temp_key = $key + 1;
    if ( $current_page == $temp_key ) {
      $output .= '<li class="page-item active"><a class="page-link" href="' . $post_base . $temp_key . '">' . $temp_key . '</a></li>';
    } else {
      $output .= '<li class="page-item"><a class="page-link" href="' . $post_base . $temp_key . '">' . $temp_key . '</a></li>';
    }
	}

  // Next
	if ( $current_page == $num_pages ) {
		$output .= '<li class="page-item disabled"><a class="page-link">';
	} else {
		$output .= '<li class="page-item"><a class="page-link" href="' . $post_base . ($current_page + 1) . '">';
  }
	$output .= '<i class="fas fa-angle-right"></i></a></li>';

  // Skip to last
  if ( $current_page == $num_pages ) {
		$output .= '<li class="page-item disabled"><a class="page-link">';
	} else {
		$output .= '<li class="page-item"><a class="page-link" href="' . $post_base . $num_pages . '">';
  }
	$output .= "<i class=\"fas fa-angle-double-right\"></i></a></li>";

  // Close UL
	$output .= '</ul>';

	return $output;
}
add_filter('wp_link_pages', 'b4st_split_post_pagination');