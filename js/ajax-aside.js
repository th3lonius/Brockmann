$(document).ready(function() {

    var nav = ('nav ul li a');

    // Check for value in rel attribute
    var rel = $('nav ul li a').each(function(){
        var rel = $(this).attr('rel');
        if(rel){
            var toLoad = rel+'.html .leftPanel';
            $('.leftPanel').load(toLoad)
        } 
    });
    
    $('nav ul li a').click(function(){
        if (!$(this).hasClass("current")) {
            $("nav a").removeClass("current");
            $(this).addClass("current");
        }
    
    var toLoad = $(this).attr('rel')+'.leftPanel';
    $('.leftPanel').hide('fast',loadContent);
    $('#load').remove();
    $('.leftPanel').append('<span id="load">LOADING...</span>');
    $('#load').fadeIn('normal');
        

        
    function loadContent() {
    	$('.leftPanel').load(toLoad,'',showNewContent())
    }
    function showNewContent() {
    	$('.leftPanel').show('normal',hideLoader());
    }
    function hideLoader() {
    	$('#load').fadeOut('normal');
    }
    return false;
    
    });
    
   
});
