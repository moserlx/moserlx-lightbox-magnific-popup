(function($) {
    "use strict";
	$(document).ready(function($){
		$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
			if ($(this).parents('.gallery').length == 0) {
				$(this).addClass('msr_imgpop');
				
				if ($('.woocommerce .product .images a')) {
					$('.woocommerce .product .images a').removeClass('msr_imgpop');
				}
			}
			
			// Popup images
			$('.msr_imgpop').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				closeBtnInside: false,
				fixedContentPos: true,
				mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
				image: {
					verticalFit: true
				},
				zoom: {
					enabled: true,
					duration: 400 // don't foget to change the duration also in CSS
				}
			});
		});
	});
})(jQuery);