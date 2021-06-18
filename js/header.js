$.post('../php/header.php',{ contra: $("#contra").val(), email: $("#correo").val() })
.done(function(data,textStatus,jqXHR){
	console.log("Solicitud se ha completado correctamente "+ textStatus);

$("#sesion").html(data)


})
.fail(function(data,textStatus,jqXHR){
	$("#ejer3").html("Error: " + textStatus + ": " + jqXHR);
})
.always(function(data,textStatus,jqXHR){
	console.log("../php/header.php")
})