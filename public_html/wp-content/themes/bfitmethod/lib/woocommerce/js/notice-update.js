jQuery(document).on( 'click', '.bfitmethod-woocommerce-notice .notice-dismiss', function() {

	jQuery.ajax({
	    url: ajaxurl,
	    data: {
	        action: 'bfitmethod_dismiss_woocommerce_notice'
	    }
	});

});
