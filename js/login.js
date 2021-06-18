$("#login").click(function(){
  $.post('../php/login.php',{ contra: $("#contra").val(), email: $("#correo").val() })
    .done(function(data,textStatus,jqXHR){
      console.log("Solicitud se ha completado correctamente "+ textStatus);

      if (data=="good") {
        location.replace("../index.html")
        console.log("login ok");
      }else if(data=="bad"){
        $("#mensaje").html("<i class='fa fa-close text-danger p-0 mt-1 mr-3'></i>Estos datos son incorrectos");
      }else{
        $("#mensaje").html("<i class='fa fa-close text-danger p-0 mt-1 mr-3'></i>ERROR: error desconocido en login.php");
        console.log(data)
      }
     

    })
    .fail(function(data,textStatus,jqXHR){
      ("#ejer3").html("Error: " + textStatus + ": " + jqXHR);
    })
    .always(function(data,textStatus,jqXHR){
      console.log("../php/login.php")
    })
})
