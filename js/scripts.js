$(document).ready(function() {

function fade_header() {
    
		if ($(window).width() >= 720) {

			window_scroll = $(this).scrollTop();

			if (window_scroll > $('header').height()) {

				$('.min').fadeIn('fast');
                
			} else {
				
				$('.min').fadeOut('fast');
        
			}
            
		} else if ($(window).width() >= 480 && $(this).width() <= 720) {
            
            $('.min').show();
            
        }

}
    
    $(window).scroll(function() { fade_header(); });    
    

$('.tiles div').click(function() {
    $(this).toggleClass('full_width');
    $(this).siblings().slideToggle(200);
});
    
 $('.banner').click(function() {
        $('nav').toggleClass('nudgeLeft'); 
   });
    
    $('.slideLeft').click(function(event) {
        $('.wrapper').toggleClass('leftSide');
        return false;
        
        event.preventDefault();
    });
    
    
$('#0').click(function(event) {
    $('#plate0').slideToggle( 400, function(){
        $('#pieceDetails').toggleClass('opaque');
        $('.wrapper').toggleClass('slideLeft');
        $('#detailExit').show(function(){
            $(this).click(function(event){
                $(this).hide();
                $('.wrapper').toggleClass('slideLeft');
                $('#pieceDetails').toggleClass('opaque');
                event.preventDefault();
            });
        });
        
    });
    
    event.preventDefault();

});

});