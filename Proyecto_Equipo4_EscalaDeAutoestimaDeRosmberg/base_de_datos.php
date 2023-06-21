<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Interpretación</title>
    </head>

    <body>
        <?php


            //Crear la base de datos
            $servername = "localhost";
            $username = "admin";
            $password = "amiel4041";


            // Conectar
            $conn = new mysqli($servername, $username, $password);

            // Verificar Conexion
            if ($conn->connect_error) {
                die("Conexion fallida: " . $conn->connect_error);
            }

           /*
            $sql = "CREATE DATABASE datos_test";
            if ($conn->query($sql) === TRUE){
                echo "Base de datos creada correctamente";
                echo "<br>";
            }

            else{
                echo "Base de datos no creada: " . $conn->error;
            }
        //    */

            $dbname = "datos_test";


            // Conectar 
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar Conexion
            if ($conn->connect_error) {
                die("Conexion fallida: " . $conn->connect_error);
            }

        //    /*
            $sql = "CREATE TABLE Personas(
                                        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                        nombre varchar(30) NOT NULL,
                                        apellido varchar(30) NOT NULL,
                                        puntos INT,
                                        resultado VARCHAR(255) NOT NULL,
                                        reg_date TIMESTAMP DEFAULT
                                        CURRENT_TIMESTAMP ON UPDATE
                                        CURRENT_TIMESTAMP)";

            if ($conn->query($sql) === TRUE){
                echo "Se creo correctamente la tabla Persona";
                echo "<br>";
            }
            else{
                echo "No se creo la tabla Persona";
            }

        //    */

        /*
            //AGREGAR DATOS
            $stmt = $conn->prepare("INSERT INTO Persona (firstname, lastname, puntos, resultado)
                                    VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $first_name, $lastname, $puntos, $resultado);
            $first_name = $_POST["nombre"];
            $lastname = $_POST["apellido"];
            $puntos = $_POST["puntos"];
            $resultado = $_POST["resultado"];

            $stmt->execute();

            //echo "Registros creados corretamente";
            //echo "<br>";

            header("Location: resultado.html");
           
            $stmt->close();
            $conn->close();
        */

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $puntos = 0; // Variable para almacenar los puntos (se calculan más adelante)
    $resultado = ""; // Variable para almacenar el resultado (se calcula más adelante)

    // Calcular los puntos basados en las respuestas
    // ... código para calcular los puntos (se encuentra en la función "procesarRespuestas()" en el código HTML)

    // Determinar el resultado basado en los puntos
    // ... código para determinar el resultado (se encuentra en la función "procesarRespuestas()" en el código HTML)

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO Personas (nombre, apellido, puntos, resultado)
            VALUES ('$nombre', '$apellido', '$puntos', '$resultado')";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
}

header("Location: resultado.html");
// Cerrar la conexión a la base de datos
$conn->close();



        ?>
    </body>
</html>
