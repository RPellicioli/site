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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.preview-image-form').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file").change(function(){
    readURL(this);
});