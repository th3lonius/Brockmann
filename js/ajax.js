$(document).ready(function() {

    var nav = ('nav ul li a');
    

    // Check for hash value in URL
    var hash = window.location.hash.substr(1);
    var href = $('nav ul li a').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-5)){
            var toLoad = hash+'.html #content';
            $('#content').load(toLoad)
        } 
    });
    
    $('nav ul li a').click(function(){
        if (!$(this).hasClass("current")) {
            $("nav a").removeClass("current");
            $(this).addClass("current");
        }
    
    var toLoad = $(this).attr('href')+'#content';
    $('#content').hide('fast',loadContent);
    $('#load').remove();
    $('#wrapper').append('<span id="load">LOADING...</span>');
    $('#load').fadeIn('normal');
        
    window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
        
    function loadAside() {
        if (toLoad=='gallery.html') {
            var toLoad = toLoad+'-aside.html';
            $('.leftPanel').load(toLoad,'',showAside())
        }
    }
        
    function showAside () {
        $('.leftPanel').show('normal',hideLoader());
    }
        
    function loadContent() {
    	$('#content').load(toLoad,'',showNewContent())
    }
    function showNewContent() {
    	$('#content').show('normal',hideLoader());
    }
    function hideLoader() {
    	$('#load').fadeOut('normal');
    }
    return false;
    
    });
    
   
});
