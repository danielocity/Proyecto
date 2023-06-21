<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>PERSONAS</title>
    </head>

    <body>
        <?php

            //Crear la base de datos
            $servidornombre = "localhost";
            $usuario = "admin";
            $contrase = "amiel4041";


            // Conectar
            $conn = new mysqli($servidornombre, $usuario, $contrase);

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
            */

            $nombebase = "datos_test";


            // Conectar
            $conn = new mysqli($servidornombre, $usuario, $contrase, $nombebase);

            // Verificar Conexion
            if ($conn->connect_error) {
                die("Conexion fallida: " . $conn->connect_error);
            }

            /*
            $sql = "CREATE TABLE Persona(id INT(6) UNSIGNED AUTO_INCREMENT
                                        PRIMARY KEY, firstname varchar(30) NOT NULL,
                                        lastname varchar(30) NOT NULL,
                                        sexo varchar(30) NOT NULL,
                                        edad INT(3) NOT NULL,
                                        inteligencia_emocional INT(3) NOT NULL,
                                        claridad_emocional INT(3) NOT NULL,
                                        reparacion_emocional INT(3) NOT NULL,
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
            */
            


            //AGREGAR DATOS
            $stmt = $conn->prepare("INSERT INTO Persona (firstname, lastname, sexo, edad,  inteligencia_emocional, claridad_emocional, reparacion_emocional)
                                    VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss", $first_name, $lastname, $sexo, $edad, $inteligencia_emocional, $claridad_emocional, $reparacion_emocional);
            $first_name = $_POST["nombre"];
            $lastname = $_POST["apellido"];
            $sexo = $_POST["sexo"];
            $edad = $_POST["edad"];
            $inteligencia_emocional = $_POST["suma"];
            $claridad_emocional = $_POST["suma2"];
            $reparacion_emocional = $_POST["suma3"];

            $stmt->execute();

            //echo "Registros creados corretamente";
            //echo "<br>";

            header("Location: resultado.html");
           
            $stmt->close();
            $conn->close();


        ?>
    </body>
</html>
