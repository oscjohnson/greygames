$(document).ready(function(){
	$('.fancybox').fancybox({
		transitionIn  : 'elastic',
		transitionOut : 'elastic'
	});

	$(".login").fancybox({
	
	    wrapCSS : 'login-lightbox-class',
		padding : '0px',
		height : '500px',
		width : '360px',
		scrolling : 'no',
		overflow : 'hidden'
		
	});

});