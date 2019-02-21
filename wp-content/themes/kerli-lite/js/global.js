/*---------------------------------------------------------------------------------------------
  Skip Link Focus Fix
----------------------------------------------------------------------------------------------*/
( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
					element.tabIndex = -1;

				element.focus();
			}
		}, false );
	}
})();

/*---------------------------------------------------------------------------------------------
  Global
----------------------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
	
	/* Scroll to top */
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#backtotop').css({bottom:"40px"});
		} else {
			jQuery('#backtotop').css({bottom:"-100px"});
		}
	});
	jQuery('#backtotop').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 1800);
		return false;
	});

	// Toggle mobile menu
	$(".nav-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".mobile-menu").slideToggle();
		if ($(".search-toggle").hasClass("active")) {
			$(".search-toggle").removeClass("active");
			$(".search-container").slideToggle();
		}
		return false;
	});
	
	// Search Form (Popup)
	$('.toggle-search > .icon-search').click(function(){
		$('.wrapper-search-top-bar').fadeIn('', function() {});
		$('.toggle-search > .icon-search').toggleClass('active');
		$('.toggle-search > .icon-remove').toggleClass('active');
	});

	$('.toggle-search > .icon-remove').click(function(){
		$('.wrapper-search-top-bar').fadeOut('', function() {});
		$('.toggle-search > .icon-search').toggleClass('active');
		$('.toggle-search > .icon-remove').toggleClass('active');
	});
	
	// Hide mobile menu/search container at resize
	$(window).resize(function() {
	
		if ($(window).width() >= 850) {
			$(".nav-toggle").removeClass("active");
			$('.mobile-menu').hide();
		}
		
		if ($(window).width() <= 850) {
			$(".search-toggle").removeClass("active");
			$('.search-container').hide();
		}
	
	});

});