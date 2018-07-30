$(document).ready(function(){
	var header = $('#header');   

	$(window).scroll(function () { 
		if ($(this).scrollTop() > 50) { 
			header.addClass("show-menu"); 
		} else { 
			header.removeClass("show-menu"); 
		} 
	});

	setInterval("trocaCab();",5000);
});

$('#mask-video').click(function(){
	$(this).fadeOut();
});