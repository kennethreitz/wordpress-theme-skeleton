$(function(){
	$('#header #nav a').markCurrentLocation();
	
	if($.browser.mobile)
		$('#comments').hide();
	
	if($.browser.msie)
		$('.lu:first-child').addClass('first-child')
});


