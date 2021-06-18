$(document).ready();

var contador = 1;

//Menú Superior para deslizar
function main(){
	$('.menu_bar').click(function(){
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		}else{
			contador = 1;
			$('nav').animate({
				left: '100%'
			});
		}
	});

	//Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}

//Llamamos a la función del Menú
main();




