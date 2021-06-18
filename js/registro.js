/*VERIFICAR REGISTER*/
$("#nombre").blur(Verificanombre); //quito focus
$("#apellido").blur(Verificaapellido); //quito focus
$("#contra").blur(Verificacontra); //quito focus
$("#direccion").blur(Verificadireccion); //quito focus
$("#telefono").blur(Verificatelf); //quito focus
$("#correo").blur(Verificaemail); //quito focus
var varhaymas="";


function Verificanombre(){

  $(this).attr("style","outline: initial");
  var errores1 = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
  var extepcion1=errores1.test($("#nombre").val())

  if(($("#nombre").val()!="")&&extepcion1){
   
      $("#errorNombre").addClass("d-none");
      return true
  }else{
      $("#errorNombre").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>El nombre debe contener una letra mayuscula inicial</p>");
      $("#errorNombre").removeClass("d-none");
      return false
  }
  
}

function Verificaapellido(){
  
  $(this).attr("style","outline: initial");
  var errores1 = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
  var extepcion1=errores1.test($("#apellido").val())

  if(($("#apellido").val()!="")&&extepcion1){
      $("#errorApellido").addClass("d-none");
      return true
  }else{
      $("#errorApellido").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>El apellido debe contener una letra mayuscula inicial</p>");
      $("#errorApellido").removeClass("d-none");
      return false
  }
  
}

function Verificaemail(){

  $(this).attr("style","outline: initial");
      var errores2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      
      if(($("#correo").val()!="" && errores2.test($("#correo").val()))){
          $("#errorCorreo").addClass("d-none");
          return true
      }else{
        console.log("correo: "+ false);

        $("#errorCorreo").removeClass("d-none");
        $("#errorCorreo").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>El correo debe contener un @</p>");
        return false;
      }
  
}

function Verificacontra(){
 
  $(this).attr("style","outline: initial");
  var errores1 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,10}/
  var extepcion1 =errores1.test($("#contra").val())
  if(($("#contra").val()!="")&& extepcion1){
      $("#errorContra").addClass("d-none");
      return true
  }else{
      $("#errorContra").removeClass("d-none");
      $("#errorContra").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>La contraseña debe contener una minuscula, una mayuscula y un numero, debe ser de una longitud de entre 6 y 10 caracteres</p>");

      return false;
  }
}

function Verificatelf(){

  $(this).attr("style","outline: initial");
  var errores1 =  /^([0-9]){9}$/
  var extepcion1 =errores1.test($("#telefono").val())
  if(($("#telefono").val()!="")&& extepcion1){
      $("#errorTelefono").addClass("d-none");
      return true
  }else{
      $("#errorTelefono").removeClass("d-none");
      $("#errorTelefono").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>El telefono deben ser 9 numeros</p>");

      return false
  }
  
}
function Verificadireccion(){
  
  var errores1 =  /^([A-Za-z0-9'\.\-\s\,]*)$/

  var extepcion1 =errores1.test($("#direccion").val())

  $(this).attr("style","outline: initial");
  if(($("#direccion").val()!="") && extepcion1){
      $("#errorDireccion").addClass("d-none");
      return true
  }else{
      $("#errorDireccion").removeClass("d-none");
      $("#errorDireccion").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>La direccion no puede tener los simbolos &(%#$^)</p>");

      return false
  }
  
}

$("#registrarse").click(Registrar); //Registrar
function Registrar(){
console.log("Nombre registrar: "+Verificanombre())
console.log("Apellido registrar: "+Verificaapellido())
console.log("Email registrar: "+Verificaemail())
console.log("Contra registrar: "+Verificacontra())
console.log("Telefono registrar: "+Verificatelf())
console.log("Direccion registrar: "+Verificadireccion())

if(Verificanombre() && Verificaapellido() && Verificaemail() && Verificacontra() && Verificatelf() && Verificadireccion()){

  $.post('../php/haymas.php',{mail: $("#correo").val()})
    .done(function(data,textStatus,jqXHR){
    
       console.log(data)
        if(data =="false"){
          console.log("correo: "+ true);
          $("#errorCorreo").addClass("d-none");
          $.post('../php/register.php',{nombre: $("#nombre").val(),apellido: $("#apellido").val() ,correo: $("#correo").val() ,contra: $("#contra").val() ,direccion: $("#direccion").val() , telf:$("#telefono").val() })
            .done(function(data,textStatus,jqXHR){
              console.log("Solicitud se ha completado correctamente "+ textStatus);
              console.log(data);
              if(data=="good"){
                location.replace("../paginas/login.html")
              }else{
                $("#ejer3").html(data);
              }
            })
            .fail(function(data,textStatus,jqXHR){
              $("#ejer3").html("Error: " + textStatus + ": " + jqXHR);
            })
            .always(function(data,textStatus,jqXHR){
              console.log("../php/register.php")
            })
        }else{
          console.log("email: "+ false);
          $("#errorCorreo").removeClass("d-none");
          $("#errorCorreo").html("<i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>Este usuario ya existe, introduzca otro</p>");
        }

    })
    .fail(function(data,textStatus,jqXHR){
      console.log("Error: " + textStatus + ": " + jqXHR);
    })


  }else{
    console.log("hay un error")

  }
}
function haymas(){
   $.post('../php/haymas.php',{mail: $("#correo").val()})
      .done(function(data,textStatus,jqXHR){
       
        varhaymas=data;
        console.log(data);
        return data;
      })
      .fail(function(data,textStatus,jqXHR){
        console.log("Error: " + textStatus + ": " + jqXHR);
      })
      .always(function(data,textStatus,jqXHR){
      })
      
}