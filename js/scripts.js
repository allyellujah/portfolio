var allye = {};

$(function(){
	allye.init();
	allye.hamburger();
	$('footer .credit').on('click', function() {
    	window.location.reload(true);
    });
});

allye.hamburger = function(){
	$('.hamburger').click(function(){
		if($(this).hasClass('active')) {
			$('.active').removeClass('active');
	    	} else {
	    		$(this).addClass('active');
	    	}
	    $('nav').slideToggle(1000);
	});
    
}

allye.init = function(){
	new WOW().init();
}

