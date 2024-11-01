(function( $ ) {
	'use strict';
	$(document).ready(function () {
		$('.formbox input').on('change', function() {
			$('.formbox input').not(this).prop('checked', false);  
		});
	});
		 

})( jQuery );
