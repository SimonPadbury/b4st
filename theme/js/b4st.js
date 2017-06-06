(function ($) {

	'use strict';

	$(document).ready(function() {

		// Navbar dropdown on hover
		function menu() {
			$('.dropdown').each(function(index, el) {
				$( '.dropdown-toggle', el).bind( 'click', function() {
					if($('body').width() > 1100) {
					return location.href = $(this).attr('href');
				  }
				})
		    	$(el).hover(function() {
			    	if($('body').width() > 1100) {
		        		$(el).addClass('show');
		      		}
		    	}, function() {
			    	if($('body').width() > 1100){
		        		$(el).removeClass('show');
		      		}
		    	});
			});
		}
		
		menu();
		
		$(window).resize(function() {
			menu();
		});
		
		// Comments
		
		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms
		
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

    	// Pagination fix for ellipsis
    	
		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	});

}(jQuery));
