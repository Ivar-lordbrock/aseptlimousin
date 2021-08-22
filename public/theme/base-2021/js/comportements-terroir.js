// JavaScript Document
$(document).ready(function(){
  $('body').append('<a href="#top" id="#fleche" class="top_link" title="Haut de page"><span class="fa fa-chevron-up fa-3x" aria-hidden="true"></span></a>');
	   $('.top_link').css({
	'position'				:	'fixed',
	'right'					:	'15px',
	'bottom'				:	'70px',
	'display'				:	'none',
	'color'				    :	'#dd562c',
	/*'padding'				:	'20px',
	'background'			:	'#fff',
	'-moz-border-radius'	:	'40px',
	'-webkit-border-radius'	:	'40px',
	'border-radius'			:	'40px',*/
	'opacity'				:	'1.0',
	'z-index'				:	'2000'
});
	 $(".go-b a").click(function() {
    $('html,body').animate({
        scrollTop: $("#top").offset().top},
        'slow');
});
	 $('div.flecheDown a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 'slow');
                   
                    event.preventDefault();
                });
	$('div.flecheDownUn a').bind('click',function(event){
                    var $anchor = $(this);
                    var iWindowsSize = $(window).width();
					if (iWindowsSize >=992){
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-140
                    }, 'slow');
		}
		else{
					$('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-10
                    }, 'slow');
                 }  
                    event.preventDefault();
                });
	 $('div.flecheDown2 a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 'slow');
                   
                    event.preventDefault();
                });


	$(".fancybox").fancybox();	
	
	
	$(window).scroll(function(){
	posScroll = $(document).scrollTop();
	if(posScroll >550) 
		$('.top_link').fadeIn(600);
	else
		$('.top_link').fadeOut(0);
});
	$(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 250) { //si on a défilé de plus de 150px du haut vers le bas
          $('#menu').addClass("fixNavigation");
		  		 /*  $('#menu').addClass("animated");
		 $('#menu').addClass("fadeInDown");
		  $('#leLogo').addClass("petitleLogo");*/
		  $('#sousTitre').addClass("fadeOutRight");
		$('#content').addClass("gestionMarge");//on ajoute la classe "fixNavigation" à <div id="navigation">
      } else {
      $('#menu').removeClass("fixNavigation");
		 /*$('#menu').removeClass("animated");
		  $('#menu').removeClass("fadeInDown");
		  $('#leLogo').removeClass("petitleLogo");*/
		  $('#sousTitre').removeClass("fadeOutRight");
		  
	$('#content').removeClass("gestionMarge");//sinon on retire la classe "fixNavigation" à <div id="navigation">
      }
   });
	
	/*
			$(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 800) { //si on a défilé de plus de 150px du haut vers le bas
          $('#trois #bouteille').show();
		  $('#trois #bouteille').addClass("animated");
		  $('#trois #bouteille').addClass("fadeInRight");
		  $('#trois #description').show();
		  $('#trois #description').addClass("animated");
		  $('#trois #description').addClass("fadeInLeft");
		 
      } else {
		  $('#trois #bouteille').hide();
		  $('#trois #bouteille').removeClass("animated");
		  $('#trois #bouteille').removeClass("fadeInRight");
		  $('#trois #description').hide();
		  $('#trois #description').removeClass("animated");
		  $('#trois #description').removeClass("fadeInLeft");
      }
   });  */
	
	
	
		$(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 150) { //si on a défilé de plus de 150px du haut vers le bas
          $('#footer').addClass("relatived-footer-terroir");
		/*  $('#footer').addClass("animated");
		  $('#footer').addClass("fadeInDown");*/
		
      } else {
      $('#footer').removeClass("relatived-footer-terroir");
		 $('#footer').removeClass("animated");
		  $('#footer').removeClass("fadeInDown");
	
      }
   });
	
		function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}
/*	$(document).ready(function(){
    $('#flecheUn').each(function() {
        animationHover(this, 'shake');
    });
});*/
	
	
	
});









