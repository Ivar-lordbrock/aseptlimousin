// JavaScript Document
$(document).ready(function(){
  $('body').append('<a href="#haut" id="#fleche" class="top_link" title="Haut de page"><span class="fa fa-chevron-up fa-3x" aria-hidden="true"></span></a>');
	   $('.top_link').css({
	'position'				:	'fixed',
	'right'					:	'15px',
	'bottom'				:	'10px',
	'display'				:	'none',
	'color'				    :	'#fc565f',
	/*'padding'				:	'20px',
	'background'			:	'#fff',
	'-moz-border-radius'	:	'40px',
	'-webkit-border-radius'	:	'40px',
	'border-radius'			:	'40px',*/
	'opacity'				:	'1.0',
	'z-index'				:	'2000'
});
	 $("a.actions").click(function() {
     $(this).toggleClass("clic");
});
	 $("a.agenda").click(function() {
     $(this).toggleClass("clic2");
});
	
	 $(".go-b a").click(function() {
    $('html,body').animate({
        scrollTop: $("#haut").offset().top},
        'slow');
});
	
	
	


	$(".fancybox").fancybox();	
	
	
	$(window).scroll(function(){
	posScroll = $(document).scrollTop();
	if(posScroll >250) 
		$('.top_link').fadeIn(600);
	else
		$('.top_link').fadeOut(0);
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









