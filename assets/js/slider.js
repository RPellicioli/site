var cab = 1;

function trocaCab(){
	removeCab();
	$(".img_"+cab).addClass('show-img');
	cab++;
	if(cab>= ($(".cntimg").length) / 2){cab=0}
}

function removeCab(){
	$(".cntimg").removeClass('show-img')
}