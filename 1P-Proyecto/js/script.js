function sumatoria() {

    // Obtener los valores de los campos de entrada
    var R1A = document.getElementById("A1").value;
    var R1B = document.getElementById("B1").value;
    var R1C = document.getElementById("C1").value;
    var R2A = document.getElementById("A2").value;
    var R2B = document.getElementById("B2").value;
    var R2C = document.getElementById("C2").value;
    var R3A = document.getElementById("A3").value;
    var R3B = document.getElementById("B3").value;
    var R3C = document.getElementById("C3").value;
    var R4A = document.getElementById("A4").value;
    var R4B = document.getElementById("B4").value;
    var R4C = document.getElementById("C4").value;
    var R5A = document.getElementById("A5").value;
    var R5B = document.getElementById("B5").value;
    var R5C = document.getElementById("C5").value;
    var R6A = document.getElementById("A6").value;
    var R6B = document.getElementById("B6").value;
    var R6C = document.getElementById("C6").value;
    var R7A = document.getElementById("A7").value;
    var R7B = document.getElementById("B7").value;
    var R7C = document.getElementById("C7").value;
    var R8A = document.getElementById("A8").value;
    var R8B = document.getElementById("B8").value;
    var R8C = document.getElementById("C8").value;
    var R9A = document.getElementById("A9").value;
    var R9B = document.getElementById("B9").value;
    var R9C = document.getElementById("C9").value;
    var R10A = document.getElementById("A10").value;
    var R10B = document.getElementById("B10").value;
    var R10C = document.getElementById("C10").value;

    // Calcular la suma de cada inciso
    var suma1 = parseInt(R1A) + parseInt(R1B) + parseInt(R1C)
    var suma2 = parseInt(R2A) + parseInt(R2B) + parseInt(R2C)
    var suma3 = parseInt(R3A) + parseInt(R3B) + parseInt(R3C)
    var suma4 = parseInt(R4A) + parseInt(R4B) + parseInt(R4C)
    var suma5 = parseInt(R5A) + parseInt(R5B) + parseInt(R5C)
    var suma6 = parseInt(R6A) + parseInt(R6B) + parseInt(R6C)
    var suma7 = parseInt(R7A) + parseInt(R7B) + parseInt(R7C)
    var suma8 = parseInt(R8A) + parseInt(R8B) + parseInt(R8C)
    var suma9 = parseInt(R9A) + parseInt(R9B) + parseInt(R9C)
    var suma10 = parseInt(R10A) + parseInt(R10B) + parseInt(R10C)



    // Calcular la sumatoria
    var sumaA =
        parseInt(R1A) +
        parseInt(R2A) +
        parseInt(R3A) +
        parseInt(R4A) +
        parseInt(R5A) +
        parseInt(R6A) +
        parseInt(R7A) +
        parseInt(R8A) +
        parseInt(R9A) +
        parseInt(R10A)

    var sumaB =
        parseInt(R1B) +
        parseInt(R2B) +
        parseInt(R3B) +
        parseInt(R4B) +
        parseInt(R5B) +
        parseInt(R6B) +
        parseInt(R7B) +
        parseInt(R8B) +
        parseInt(R9B) +
        parseInt(R10B)

    var sumaC =
        parseInt(R1C) +
        parseInt(R2C) +
        parseInt(R3C) +
        parseInt(R4C) +
        parseInt(R5C) +
        parseInt(R6C) +
        parseInt(R7C) +
        parseInt(R8C) +
        parseInt(R9C) 
        parseInt(R10C)

    if(suma1 != 10){
        alert("La suma del inciso 1 no es igual a 10");
        return false;
    } else if(suma2 != 10 ) {
        alert("La suma del inciso 2 no es igual a 10");
        return false;
    }
    else if(suma3 != 10 ) {
        alert("La suma del inciso 3 no es igual a 10");
        return false;
    }
    else if(suma4 != 10 ) {
        alert("La suma del inciso 4 no es igual a 10");
        return false;
    }
    else if(suma5 != 10 ) {
        alert("La suma del inciso 5 no es igual a 10");
        return false;
    }
    else if(suma6 != 10 ) {
        alert("La suma del inciso 6 no es igual a 10");
        return false;
    }
    else if(suma7 != 10 ) {
        alert("La suma del inciso 7 no es igual a 10");
        return false;
    }
    else if(suma8 != 10 ) {
        alert("La suma del inciso 8 no es igual a 10");
        return false;
    }
    else if(suma9 != 10 ) {
        alert("La suma del inciso 9 no es igual a 10");
        return false;
    }
    else if(suma10 != 10 ) {
        alert("La suma del inciso 10 no es igual a 10");
        return false;
    }else {
        // Mostrar el resultado en el elemento "resultado"
        document.getElementById("sumaA").innerHTML = "A. _____<u>" + sumaA + "</u>______";
        document.getElementById("sumaB").innerHTML = "B. _____<u>" + sumaB + "</u>______";
        document.getElementById("sumaC").innerHTML = "C. _____<u>" + sumaC + "</u>______";

        // Guardar variables en localStorage
        localStorage.setItem("columnaA", sumaA);
        localStorage.setItem("columnaB", sumaB);
        localStorage.setItem("columnaC", sumaC);
    }
}