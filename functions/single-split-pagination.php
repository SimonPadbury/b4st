<?php
/*
 * Split Post Pagination
 */

add_filter('wp_link_pages', 'b4st_split_post_pagination');
function b4st_split_post_pagination($args = ''){
	$defaults = array(
		'before' => '<nav aria-label="Page navigation"<ul class="pagination">',
		'after' => '</ul></nav>',
		'text_before' => '',
		'text_after' => '',
		'link_class' => 'page-link',
		'next_or_number' => 'number',
		'nextpagelink' => __( 'Next' ),
		'previouspagelink' => __( 'Previous' ),
		'pagelink' => '%',
		'echo' => 1
	);

	$r = wp_parse_args( $args, $defaults );
	$r = apply_filters( 'wp_link_pages_args', $r );
	extract( $r, EXTR_SKIP );

	global $page, $numpages, $multipage, $more, $pagenow;

	$output = '';
	if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
			$output .= $before;

			// Previous page link
			$i = $page - 1;
			if ( $i && $more ) {
				$output .= '<li class="page-item"><a class="page-link" href="' . get_post_page_url( $i ) . '">';
				$output .= $text_before . $previouspagelink . $text_after . '</a>';
			}

			for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
				$j = str_replace( '%', $i, $pagelink );
				$output .= ' ';
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '<li class="page-item"><a class="page-link" href="' . get_post_page_url( $i ) . '">';
				else
					$output .= '<li class="page-item active"><a class="page-link" href="#">';

				$output .= $text_before . $j . $text_after;
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '</li></a>';
				else
					$output .= '</li></a>';
			}

			// Next page link
			$i = $page + 1;
			if ( $i <= $numpages && $more ) {
				$output .= '<li class="page-item"><a class="page-link" href="' . get_post_page_url( $i ) . '">';
				$output .= $text_before . $nextpagelink . $text_after . '</a>';
			}

			$output .= $after;
		}
	}

	return $output;
}

// Extract link from string
function get_post_page_url( $i ) {
	if ( preg_match( '/href="([^"]+)"/', _wp_link_page( $i ), $match ) )
		return $match[1];
}
