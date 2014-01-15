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

	$(".fancyYoutube").click(function(){
		$.fancybox({
			'transitionIn' : 'elastic',
			'padding' : 0,
			'href'	: this.href.replace(new RegExp("watch\\?v=","i"), 'v/'),
			'autoScale' : false,
			'transitionOut' : 'fade',
			'width' : 680,
			'height' : 495,
			'type' : 'swf'
		});
		return false;
	});
	$(".fancyImg").fancybox({
		padding : '0px',
		showNavArrows :   true
	});


	$("#playlist-button").live('click',function(){
		if($("#playlist-button").hasClass("inPlaylist")){
			$.post("removePlaylist.php",function(data){});
			$("#playlist-button").removeClass("inPlaylist");
			$("#playlist-button").addClass("notInPlaylist");
		}
		else{
			$.post("insertPlaylist.php",function(data){});
			$("#playlist-button").addClass("inPlaylist");
			$("#playlist-button").removeClass("notInPlaylist");
		}
	});

	
	
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: 'true',
        slideshowSpeed: 10000, 
        directionNav: false,
        controlsContainer: ".flex-container",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
	
	$('#container-header button').on('click',function(){
		$('#container-header button').removeClass('active');
		$(this).addClass('active');
	});
	$('.active').css({ 
		background : '#3c3c3c'
	});

	$('.image-slider').css({
		width: window.innerWidth,
	});

	$('#search-field').css({
		//console.log($('#search-field input').width);/
	  	width: window.innerWidth,
	});

	$('#container-header').css({
		//console.log($('#search-field input').width);/
	  	width: window.innerWidth,
	});
	
	$('#container-header #playlist').on('click',function(){
		$('#container').load('loadPlaylist.php');
		
	});

	$('#container-header #your-ratings').on('click',function(){
		console.log('asdf');
		$('#container').load('loadYourRatings.php');
	});

	$('.rating-list a').on('mouseover',function(){
 		var max=  parseInt($(this).children().html());
 		
 		printStars(max);
		
	});
	
	

	$('.rating-list').on('mouseleave',function(){
		
		$.post('refreshRating.php',function(data){
			var max=  parseInt(data);
		 	///console.log(max);
		  	printStars(max);
		});
	});

	$('.rating-list a').click(function(e){

		e.preventDefault();
		var max = parseInt($(this).children().html());	

		 $.post('insertRating.php',{rating: max},function(data){
		
		 	if(data== 'login'){
		 		console.log('langa fancybox');
		 		$.fancybox({            
					'href'      : 'login.php'
				});
		 	
		 	}
		 	else{	
			 	var max = parseInt(data);	
			 	printStars(max);
		 	}

		 });
	});

	
});

function printStars(number){
		for(var i=1;i<=number;i++){
 			var str = '.star-'+i;
			$(str).css({
 				background: "url('images/star2.png')"
 			});

		}
		for(var i=(number+1);i<=10;i++){
			var str = '.star-'+i;
			$(str).css({
 				background: "url('images/star1.png')"
 			});	
		}
	}

/* SEARCH FUNCTION*/
$('#search-field input').live('keyup',function(){	
	//console.log($("#search-field input").val());
	$("#livesearch").load("search.php?val=" + $("#search-field input").val(),function(data){
		console.log(data);
	});
/*
	console.log($('#search-field input').val());
	var srhterm = 'q=' +$('#search-field input').val();
	$.ajax({
		type: "GET",
		//data: $('#input').val();
		data: srhterm,
		url: 'search.php',
		success: function(data) {
		$('#livesearch').html(data);
		//alert('Load was performed.');
	  }
	});
*/

});


/* SEARCH FUNCTION*/