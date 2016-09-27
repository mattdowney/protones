(function($) {
  $(function() {
    $('.menu-toggle').on('click', function(){
  $('.full-menu').toggleClass('full-menu-open');
	});
  });

//capture scroll any percentage
$(window).scroll(function(){
var wintop = $(window).scrollTop(), docheight = 
    
    $(document).height(), winheight = $(window).height();
 			var scrolled = (wintop/(docheight-winheight))*100;
  
  		$('.scroll-line').css('width', (scrolled + '%'));
});

var baseUrl = "http://protones.co/";
var audio = ["ringtone-snippets.mp3"];

$('button.listen').click(function() {
    var i = $(this).attr('id').substring(1);
    new Audio(baseUrl + audio[i-1]).play();
});

$(document).ready(function() {
  $('iframe#download').attr('src','http://protones.co/wp-content/files/protones-fall-2016.zip');
});

})(jQuery);