/****SELECCION POR ID***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(inicializar)/*cuando x este listo vamos a ejecutar la funcion inicializar*/
function inicializar () {/*lo que ejecutara la function inizializar*/
	var x; /*variable x */
	x=$('header');/*x= es igual al  id */
	x.click(clickpresionado);/*cual al dix x le den click se ejecuata la funcion clickpresionado*/
};		

function clickpresionado () {/*funcion clickprecionado*/
		var x;
		x=$('header')/*x= es igual al  id */
		x.css("padding-top", "30px");/*a la id x le vamos a agregar una propiedad css*/
}	

/***VARIAS PROPIEDADES CSS***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(inicializarr)/*cuando x este listo vamos a ejecutar la funcion inicializar*/
function inicializarr () {/*lo que ejecutara la function inizializar*/
	var x; /*variable x */
	x=$('#cont-content');/*x= es igual al  id */
	x.click(clickpresionadoo);/*cual al dix x le den click se ejecuata la funcion clickpresionado*/
};		

function clickpresionadoo () {/*funcion clickprecionado*/
		var x;
		x=$('#cont-content')/*x= es igual al  id */
		x.css("padding-top", "30px");/*a la id x le vamos a agregar una propiedad css*/
		x.css("background-color","yellow");
		x.css("border", "1px solid black");
		x.css("margin","0 0")
		x.css("width", "1500px")
}			

/***SELECCION POR CLASE***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(primarios)/*cuando x este listo vamos a ejecutar la funcion primarios*/
function primarios () {/*lo que ejecutara la function primarios*/
	var x; /*variable x */
	x=$('#boton');/*x= es igual al  id */
	x.click(mostrarprimarios);/*cual al dix x le den click se ejecuata la funcion mostrar primarios*/
};	

function mostrarprimarios () {/*funcion mostrarprimarios*/
		var x;
		x=$('.primario')/*x= es igual al  class */
		x.css("background-color","yellow");/*a la class x le vamos a agregar una propiedad css*/
		x.css("font-family","Times New Roman, arial");
		x.css("font-size","25px");
		x.css("text-shadow","0 0 1px rgba(255,255,255.0.5)");
		x.css("color","#fefef6");

}		

/***CAMBIO DE CLASES POR ETIQUETAS***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciar)/*cuando x este listo vamos a ejecutar la funcion iniciar*/
function iniciar () {/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$('h1');/*x= es igual a una etiqueta*/
	x.click(presionar);/*cual al dix x le den click se ejecuata la funcion mostrar precionar*/
};

function presionar () {/*function precionar*/
		var x;
		x=$(this)/*x= es igual al  etiqueta (h1 por ejemplo) *//*this para selecionar solo la etiqueta que le doy clip no la otras*/
		x.css("background-color","yellow");/*a la class x le vamos a agregar una propiedad css*/
		x.css("font-family","Times New Roman, arial");
		x.css("font-size","25px");
		x.css("text-shadow","0 0 1px rgba(255,255,255.0.5)");
		x.css("color","#fefef6");

}	

/***SELECTION POR ATRIBUTOS***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarr)/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$('#revelar');/*x= es igual a una ID*/
	x.click(mostrar);/*cual al dix x le den click se ejecuata la funcion mostrar precionar*/
};

function mostrar(){/*function mostrar*/
		var x=$("[href]");/*x= es igual al  atributos con "[]" (h1 por ejemplo) *//*this para selecionar solo la etiqueta que le doy clip no la otras*/
		x.css("background-color","yellow");/*a la class x le vamos a agregar una propiedad css*/
		x.css("font-family","Times New Roman, arial");
		x.css("font-size","25px");
		x.css("text-shadow","0 0 1px rgba(255,255,255.0.5)");
		x.css("color","#fefef6");
}

/***SELECTIONES MULTIPLES***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("h1#cambio");/*x= es igual a una ID*/
	x.click(cambiar);/*cual al dix x le den click se ejecuata la funcion mostrar precionar*/
	x=$("li:first");/*:first primer elemento de la lista*/
	x.click(cambiar);
};	

function cambiar(){
	var x;
	x=$("h1#cambio");
	x.css("background-color", "yellow");
	x=$("li:first");
	x.css("background-color", "yellow");
}	;

/***AGREGAR Y QUITAR CLSES ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#btn1");/*x= es igual a una ID*/
	x.click(agregarClase);/*cual al dix x le den click se ejecuata la funcion mostrar precionar*/
	x=$("#btn2");
	x.click(quitarClase);
};	

function agregarClase () {
	var x=$("#articulo");
	x.addClass('noticias');
}

function quitarClase () {
	var x=$("#articulo");
	x.removeClass('noticias');
}

/***AGREGAR HTML ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#btn3");/*x= es igual a una ID*/
	x.click(mostrarhtml);/*cual al dix x le den click se ejecuata la funcion mostrar precionar*/
};	

function mostrarhtml () {
	var x;
	x=$("#formulario")
	x.html('<form action=""><input type="text"><input type="submit"></form>');
}

/*** EVENTOS MOUSEOVER Y MOUSEOUT ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#html");/*x= es igual a una ID*/
	x.mouseover(entroMouse);/*cual al dix x entre el raton se ejecuata la funcion mostrar precionar*/
	x.mouseout(salioMouse);
};	

function entroMouse () {
	$(this).html('<a href="#">Our Flower</a>');/*this es el elemento que estamos selecionando*/

};
function salioMouse () {
	$(this).html('<a href="#">Our </a>');
};

/*** MOUSEMOVE ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$(document);/*x= es igual a una ID*/
	x.mousemove(mover);/*cual al dix x entre el raton se ejecuata la funcion mostrar precionar*/
};

function mover () {
	var x;
	x=$("#x");
	x.text("coordenada X ="+event.clientX);/* texto con un comentario) coordenada x*/
	x=$("#y");
	x.text("coordenada Y ="+event.clientY);
};	

/*** MOUSEUP MOUSEDOWN ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#pulsar");/*x= es igual a una ID*/
	x.mousedown(presionar);/*cual al dix x el raton se quede pulsado se ejecuata la funcion mostrar precionar*/
	x.mouseup(soltar);
};

function presionar () {
	
	$(this).html('<a href="#">Our Flower</a>');
	
};	
function soltar () {
	
	$(this).html('<a href="#">Our </a>');
	
};	

/*** FOCUS ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrR);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrR(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#usuario");/*x= es igual a una ID*/
	x.focus(enfocar);/*cual al dix x el usuario poner el rato en el foco de un formulario x ejemplo se ejecuata la funcion mostrar precionar*/
	x.blur(desenfocar);/*lo contrario del focos*/
	
};

function enfocar () {
	var x; /*variable x */
	x=$("#usuario");/*x= es igual a una ID*/
	x.attr("value", "");
}

/*** BLUR ***/

function desenfocar () {
	var x;
	x=$("#usuario");
	x.attr("value", "usuario")
}

/*** HIDE Y SHOW ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#mostar");/*x= es igual a una ID*/
	x.click(muestrame);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	x=$("#ocultar");
	x.click(ocultame);/*lo contrario del focos*/
	
};

function muestrame () {
	var x; /*variable x */
	x=$("#objetivo");/*x= es igual a una ID*/
	x.show("slow");/*fast animacion rapida / slow animacion lenta  */
}

function ocultame () {
	var x; /*variable x */
	x=$("#objetivo");/*x= es igual a una ID*/
	x.hide("slow");/*fast animacion rapida / slow animacion lenta */
}

/*** FADEIN FADE OUT ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRrR);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRrR(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#mostarR");/*x= es igual a una ID*/
	x.click(muestrameE);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	x=$("#ocultarR");
	x.click(ocultameE);/*lo contrario del focos*/
	
};

function muestrameE () {
	var x; /*variable x */
	x=$("#objetivoE");/*x= es igual a una ID*/
	x.fadeIn('slow/60000/')/*fast animacion rapida / slow animacion lenta  */
}

function ocultameE () {
	var x; /*variable x */
	x=$("#objetivoE");/*x= es igual a una ID*/
	x.fadeOut('slow/60000/') /*fast animacion rapida / slow animacion lenta */
}
/*** fadeTo ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRrRr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRrRr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#mostarRr");/*x= es igual a una ID*/
	x.click(muestrameEf);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	x=$("#ocultarRr");
	x.click(ocultameEf);/*lo contrario del focos*/
	
};

function muestrameEf () {
	var x; /*variable x */
	x=$("#objetivoEf");/*x= es igual a una ID*/
	x.fadeTo('slow', 1);/*fast animacion rapida / slow animacion lenta  */
}/*fadeTo tiene dos valore uno la velocidad y la tramparencia*/

function ocultameEf () {
	var x; /*variable x */
	x=$("#objetivoEf");/*x= es igual a una ID*/
	x.fadeTo('slow',0.3) ;/*fast animacion rapida / slow animacion lenta */
}

/*** toggle ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRrRrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRrRrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#mostarRrr");/*x= es igual a una ID*/
	x.click(muestrameEfr);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	
	
};

function muestrameEfr () {
	var x; /*variable x */
	x=$("#objetivoEfr");/*x= es igual a una ID*/
	x.toggle('slow');/*fast animacion rapida / slow animacion lenta  */
}/*fadeTo tiene dos valore uno la velocidad y la tramparencia*/

/*** slide ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRrRrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRrRrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#mostarRrrr");/*x= es igual a una ID*/
	x.click(muestrameEfrr);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	
	
};

function muestrameEfrr () {
	var x; /*variable x */
	x=$("#objetivoEfrr");/*x= es igual a una ID*/
	x.slideToggle('slow');/*fast animacion rapida / slow animacion lenta  */
}/*fadeTo tiene dos valore uno la velocidad y la tramparencia*/
/*slideup barrido hacia arriba*/
/**/


/*** animar ***/

var x; /*variable x*/
x=$(document);/*a x le estoy dando a guardar el documento html*/
x.ready(iniciarrrrrrrrRrRrrrr);/*cuando x este listo vamos a ejecutar la funcion iniciarr*/
function iniciarrrrrrrrRrRrrrr(){/*lo que ejecutara la function iniciar*/
	var x; /*variable x */
	x=$("#animar");/*x= es igual a una ID*/
	x.click(animar);/*cual al dix x el usuario pulsta  x ejemplo se ejecuata la funcion mostrar precionar*/
	}

function animar () {
	var x;
	x=$("#objetivoEfrrr");
	x.animate({height:"300px"
	},"slow");
	x.animate({height:"10px"
	},"fast");
	x.animate({
		height:"300px",
		width: "100px",
	},5000);
	};


