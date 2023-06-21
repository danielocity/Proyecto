function procesarRespuestas() {
  // Obtenemos todas las respuestas del formulario
  var respuestas = document.querySelectorAll('input[type=radio]:checked');

  // Verificamos que se hayan contestado todas las preguntas
  if(respuestas.length !== 10) {
    // Recorremos todas las preguntas y almacenamos las preguntas faltantes en un arreglo
    var preguntasFaltantes = [];
    for (var i = 1; i <= 10; i++) {
      if(!document.querySelector('input[name="p'+ i +'"]:checked')) {
        preguntasFaltantes.push(i);
      }
    }
    // Mostramos un mensaje de error indicando las preguntas faltantes
    alert("Por favor contesta todas las preguntas antes de procesar el resultado. Faltan por contestar las preguntas " + preguntasFaltantes.join(", "));
  }
  else {
    // Si se han contestado todas las preguntas, procesamos las respuestas
    var puntos = 0;

    // Preguntas del 1 al 5 (respuestas A-D puntúan de 4 a 1)
    for(var i = 0; i < 5; i++) {
      var respuesta = respuestas[i].value;
      if(respuesta === "a") {
        puntos += 4;
      } else if(respuesta === "b") {
        puntos += 3;
      } else if(respuesta === "c") {
        puntos += 2;
      } else if(respuesta === "d") {
        puntos += 1;
      }
    }

    // Preguntas del 6 al 10 (respuestas A-D puntúan de 1 a 4)
    for(var j = 5; j < 10; j++) {
      var respuesta = respuestas[j].value;
      if(respuesta === "a") {
        puntos += 1;
      } else if(respuesta === "b") {
        puntos += 2;
      } else if(respuesta === "c") {
        puntos += 3;
      } else if(respuesta === "d") {
        puntos += 4;
      }
    }

    // Mostramos el resultado en una nueva ventana
    var resultado = "";
    if(puntos >= 30 && puntos <= 40) {
      resultado = "Autoestima elevada. Considerada como autoestima normal.";
    } else if(puntos >= 26 && puntos <= 29) {
      resultado = "Autoestima media. No presenta problemas de autoestima graves, pero es conveniente mejorarla.";
    } else if(puntos < 25) {
      resultado = "Autoestima baja. Existen problemas significativos de autoestima.";
    }
    //var nuevaVentana = window.open();
    //nuevaVentana.document.write("<h1>Tu puntuación es " + puntos + "</h1><h1>" + resultado + "</h1>");
  }
}

