/*** NAVEGADOR ***/

var x; 
x=$(document).ready(navegador);
function navegador () {
	var x;
	x=$('#navegador');
	x.click(function() {
		var x;
		x=$('#menu-des-contenedor');
		x.css("visibility","visible");
		x.fadeIn('slow');	
	});

};

/*** MENU ***/

var x; 
x=$(document).ready(menu);
function menu () {
	var x;
	x=$('#remove');
	x.click(function() {
		var x;
		x=$('#menu-des-contenedor');
		x.slideToggle('slow');
	});
};

/*** ENLACES***/

var x; 
x=$(document).ready(enlaces);

function enlaces () {
	var x;
	x=$(".menu-des a, #botton-arriba ");
	x.click(function() {
		var seccion = $(this).attr("href");
		x=$("body, html").animate({
		scrollTop: $(seccion).offset().top	

	}, 900);
		var x;
		x=$('#menu-des-contenedor');
		x.slideToggle('fast');
	return   false;
	});
};