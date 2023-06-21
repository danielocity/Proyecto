// Obtener variables de localStorage
var columnaA = localStorage.getItem("columnaA");
var columnaB = localStorage.getItem("columnaB");
var columnaC = localStorage.getItem("columnaC");

// Agregar valores a un elemento HTML
//var resultadoElemento = document.getElementById("resultado");
//resultadoElemento.innerHTML = "Variable 1: " + columnaA + "<br>" +
//                            "Variable 2: " + columnaB + "<br>" +
//                            "Variable 3: " + columnaC;

// Variables globales
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

// Función para dibujar el tiro al blanco
function drawTarget() {
	// Dibujar fondo blanco
	ctx.fillStyle = "#f5f5f5";
	ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Dibujar los círculos del tiro al blanco
    ctx.lineWidth = 5; // Establecer el grosor del borde en 5 píxeles
    ctx.strokeStyle = "black"; // Establecer el color del borde en negro

	// Dibujar los círculos del tiro al blanco
	ctx.beginPath();
	ctx.arc(400, 310, 300, 0, Math.PI * 2);
	ctx.fillStyle = "#caffff";
    ctx.stroke();
	ctx.fill();

	ctx.beginPath();
	ctx.arc(400, 310, 240, 0, Math.PI * 2);
	ctx.fillStyle = "#f5f5f5";
    ctx.stroke();
	ctx.fill();

	ctx.beginPath();
	ctx.arc(400, 310, 180, 0, Math.PI * 2);
	ctx.fillStyle = "#caffff";
    ctx.stroke();
	ctx.fill();

	ctx.beginPath();
	ctx.arc(400, 310, 120, 0, Math.PI * 2);
	ctx.fillStyle = "#f5f5f5";
    ctx.stroke();
	ctx.fill();

	ctx.beginPath();
	ctx.arc(400, 310, 60, 0, Math.PI * 2);
	ctx.fillStyle = "#caffff";
    ctx.stroke();
	ctx.fill();

	// Dibujamos el porcentaje correspondiente a cada columna
	ctx.fillStyle = "black";
	ctx.font = "22px Arial ";

	ctx.fillText("Columna A", 5, 120);
	ctx.fillText("Poder " + columnaA + "%", 5, 150);

    ctx.fillText("Columna B", 630, 580);
	ctx.fillText("Afiliación " + columnaB + "%", 630, 610);

    ctx.fillText("Columna C", 5, 580);
	ctx.fillText("Realización personal " + columnaC + "%", 5, 610);

    ctx.fillText("20", 475, 310);
	ctx.fillText("40", 539, 310);
	ctx.fillText("60", 600, 310);
	ctx.fillText("80", 660, 310);

	ctx.fillText("20", 340, 240);
	ctx.fillText("40", 290, 200);
	ctx.fillText("60", 245, 160);
	ctx.fillText("80", 200, 120);

	ctx.fillText("20", 340, 395);
	ctx.fillText("40", 290, 435);
	ctx.fillText("60", 245, 475);
	ctx.fillText("80", 200, 515);

    // Dibujar las 3 líneas que dividen el círculo en 3 partes iguales
    const centerX = 400; // Coordenada X del centro del círculo
    const centerY = 310; // Coordenada Y del centro del círculo
    const radius = 300; // Radio del círculo

    const angleIncrement = 2 * Math.PI / 3; // Angulo incremento de 120 grados
    ctx.lineWidth = 3; // Grosor de línea reducido
    ctx.font = "20px Arial"; // Tamaño y fuente del texto
    ctx.textBaseline = "middle"; // Alineación vertical del texto
    for (let i = 0; i < 3; i++) {
        const angle = i * angleIncrement -1; // Angulo en radianes, invertido
        const startX = centerX + radius * Math.cos(angle);
        const startY = centerY + radius * Math.sin(angle);
        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.lineTo(startX, startY);
        ctx.strokeStyle = "black";
        ctx.stroke();
    }

	//Grafica nueva de la columna B
	const centerXA = 400;
	const centerYA = 310;
	const newRadiusA = 3*columnaB; // Radio del nuevo círculo

	// Dibujar un tercio del círculo con radio el porcentaje de la columna C
	ctx.beginPath();
	ctx.moveTo(centerX, centerY);
	ctx.arc(centerXA, centerYA, newRadiusA, Math.PI+4.2, (Math.PI / .589), true); // Angulo de 60 grados en sentido antihorario
	ctx.closePath();
	ctx.fillStyle = "rgba(184, 224, 205, 0.692)";
	ctx.fill();

	//Grafica nueva de la columna A
	const centerXB = 400;
	const centerYB = 310;
	const newRadiusB = 3*columnaA; // Radio del nuevo círculo

	// Dibujar un tercio del círculo con radio el porcentaje de la columna A
	ctx.beginPath();
	ctx.moveTo(centerX, centerY);
	ctx.arc(centerXB, centerYB, newRadiusB, Math.PI+2.15, (Math.PI / .98), true); // Angulo de 60 grados en sentido antihorario
	ctx.closePath();
	ctx.fillStyle = "rgba(184, 224, 205, 0.692)";
	ctx.fill();

	//Grafica nueva de la columna C
	const centerXC = 400;
	const centerYC = 310;
	const newRadiusC = 3*columnaC; // Radio del nuevo círculo

	// Dibujar un tercio del círculo con radio el porcentaje de la columna C
	ctx.beginPath();
	ctx.moveTo(centerX, centerY);
	ctx.arc(centerXC, centerYC, newRadiusC, Math.PI+0.04, (Math.PI / 2.87), true); // Angulo de 60 grados en sentido antihorario
	ctx.closePath();
	ctx.fillStyle = "rgba(184, 224, 205, 0.692)";
	ctx.fill();

}
// Dibujar el tiro al blanco inicial
drawTarget();

