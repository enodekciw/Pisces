jQuery(function(){

	if(typeof wplovin_background_url != 'undefined') {
		jQuery.backstretch(wplovin_background_url);
	}

    jQuery('.post').fitVids();
	
	jQuery('#search-box-trigger').click(function(){
		if(jQuery('#main-search-form').hasClass('search-form-open')){
			jQuery(this).children('i').toggleClass('fa-search').toggleClass('fa-times-circle');
			jQuery('#main-search-form').slideUp().toggleClass('search-form-open');	
		} else {
			jQuery(this).children('i').toggleClass('fa-search').toggleClass('fa-times-circle');
			jQuery('#main-search-form').slideDown().toggleClass('search-form-open');
		}
	});

	
	var contentContainer = jQuery('.archive-list');
	contentContainer.masonry({
		itemSelector: '.post, .page'
	});

});

window.onload = function () { 
	var contentContainer = jQuery('.archive-list');
	contentContainer.masonry();
}