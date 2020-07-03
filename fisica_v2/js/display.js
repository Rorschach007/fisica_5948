
var puntaje = 0;
var str_correcto = document.getElementsByClassName("CORRECTO");
var str_incorrecto = document.getElementsByClassName("INCORRECTO");
var btn_enviar = document.getElementsByName("enviar");
var solution = document.getElementsByName("show_solution");
var mensaje = document.getElementById("mensaje_final");

function correcto(){
for (var i = 0; i < str_correcto.length; i++) {
  str_correcto[i].style.color="green";
}
puntaje += 10;
}

function incorrecto(){
  for (var i = 0; i < str_incorrecto.length; i++) {
    str_incorrecto[i].style.color="red";
  }
}

function resp(id){ //en id va el numero de pregunta, obtiene el valor de las respuesta y ve si esta bien
  //obtener el valor
  var pregunta = "respuesta_"+id
  var selected =  document.getElementsByName(pregunta);
  var selected_value;
  for(var i = 0; i < selected.length; i++){
    if(selected[i].checked){
        selected_value = selected[i].value;
    }
    selected[i].disabled=true; //desabilita los botones
  }//cierra for
  for (var i = 0; i < btn_enviar.length; i++) {
    btn_enviar[i].disabled=true;
    solution[i].disabled=false;
  }

  //valida si es correcto o no
    switch (id) {
      case 1:
        if (selected_value == 1) {
          correcto();
        }else{
          incorrecto();
        }
        break;
      case 2:
        if (selected_value == 1) {
          correcto();
        }else{
          incorrecto();
        }
        break;
      case 3:
        if (selected_value == 0) {
          correcto();
        }else{
          incorrecto();
        }
        break;
        case 4:
          if (selected_value == 1) {
            correcto();
          }else{
            incorrecto();
          }
          break;
        case 5:
          if (selected_value == 3) {
            correcto();
          }else{
            incorrecto();
          }
          break;
        case 6:
          if (selected_value == 3) {
            correcto();
          }else{
            incorrecto();
          }
          break;
        case 6:
          if (selected_value == 3) {
            correcto();
          }else{
            incorrecto();
          }
          break;
        case 7:
          if (selected_value == 1) {
            correcto();
          }else{
            incorrecto();
          }
          break;
        case 8:
          if (selected_value == 2) {
            correcto();
          }else{
            incorrecto();
          }
          break;
          default:
    }
}


function show_solved(id) {
  id -= 1;
  document.getElementsByClassName("imagen_respuesta")[id].style.display="block";
}

function siguiente(nuevo){ //toca reiniciar todito
  var  ocultar = document.getElementsByClassName("ocultar");
  for (var i = 0; i < ocultar.length; i++) {
    ocultar[i].style.display="none";
  }
  document.getElementById("ejercicio_"+nuevo).style.display="block";

  //reiniciar valores
  for (var i = 0; i < str_correcto.length; i++) {
    str_correcto[i].style.color="white";
    str_incorrecto[i].style.color="white";
    btn_enviar[i].disabled=false;
    solution[i].disabled=true;
  }
  document.getElementById("puntaje").innerHTML = puntaje;
  document.getElementById("nota").value=puntaje;
  mostrar_mensaje(puntaje);
}

function mostrar_mensaje(puntos){
  console.log("ejecuta");
  if (puntos > 20) {
    if (puntos >= 40) {
      if (puntos >= 60) {
        mensaje.innerHTML = "Mereces pasar fisica, sube tu puntaje :)";
      }
      else{
        mensaje.innerHTML = "Es mas de la mitad!!!, subelo :)";
      }
    }
    else {
      mensaje.innerHTML = "F";
    }
  }
  else{
    mensaje.innerHTML = "Repite fisica, es lo mejor :'v";
  }
}
function demostracion(num){
  var id = "demostracion_"+num;
  document.getElementById(id).style.display = "block";
}
function ocultar(num){
  var id = "demostracion_"+num;
  document.getElementById(id).style.display = "none";
}
