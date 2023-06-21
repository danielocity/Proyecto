<html>
    <head>
		<meta charset="utf-8">
		<title>Generar base de datos</title>
	</head>
	<body>
        <?php
			$servername = "localhost";
            $username = "admin";
            $password = "amiel4041";
            $conn= new mysqli($servername,$username,$password);
            if($conn->connect_error){
                die("Sin conexión".$conn->connect_error);
            }else{
                echo "<p>Se conectó correctamente</p>";
            }
            $sql="CREATE DATABASE datos_test";
            if($conn->query($sql)===TRUE){
                echo "<p>Base de datos creada correctamente</p>";
            }else{
                echo "<p>Base de datos no creada</p>";
            }
            $dbname = "datos_test";
            $conn= new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error){
                die("Sin conexión".$conn->connect_error);
            }else{
                echo "<p>Se conectó correctamente</p>";
            }
            $sql="CREATE TABLE CHASIDETEST(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                Ci INT(3) NOT NULL, 
                Hi INT(3) NOT NULL, 
                Ai INT(3) NOT NULL, 
                Si INT(3) NOT NULL, 
                Ii INT(3) NOT NULL, 
                Di INT(3) NOT NULL, 
                Ei INT(3) NOT NULL, 
                Ca INT(3) NOT NULL, 
                Ha INT(3) NOT NULL, 
                Aa INT(3) NOT NULL, 
                Sa INT(3) NOT NULL, 
                Ia INT(3) NOT NULL, 
                Da INT(3) NOT NULL, 
                Ea INT(3) NOT NULL, 
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            if($conn->query($sql)===TRUE){
                echo "<p>Tabla creada correctamente</p>";
            }else{
                echo "<p>Tabla no creada</p>";
            }
            $Ci=$Hi=$Ai=$Si=$Ii=$Di=$Ei=$Ca=$Ha=$Aa=$Sa=$Ia=$Da=$Ea=0;
            $sql="INSERT INTO CHASIDETEST(Ci,Hi,Ai,Si,Ii,Di,Ei,Ca,Ha,Aa,Sa,Ia,Da,Ea)
            VALUES ($Ci,$Hi,$Ai,$Si,$Ii,$Di,$Ei,$Ca,$Ha,$Aa,$Sa,$Ia,$Da,$Ea)";
            if($conn->query($sql)===TRUE){
                echo "<p>Dato insertado correctamente</p>";
            }else{
                echo "<p>Dato no insertado</p>";
            }



            $sql="CREATE TABLE `resultados` (
                `nombre` text NOT NULL,
                `resInteres` text NOT NULL,
                `resAptitud` text NOT NULL,
                `puntaje_in` varchar(10) NOT NULL,
                `puntaje_ap` varchar(10) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

            if($conn->query($sql)===TRUE){
                echo "<p>Tabla creada correctamente</p>";
            }else{
                echo "<p>Tabla no creada</p>";
            }
            $sql="INSERT INTO `resultados` (`nombre`, `resInteres`, `resAptitud`, `puntaje_in`, `puntaje_ap`) VALUES
              ('', 'Humanisticas y Sociales', 'Medicina y Ciencias de la Salud', 'H6', 'S4')";
            if($conn->query($sql)===TRUE){
                echo "<p>Dato insertado correctamente</p>";
            }else{
                echo "<p>Dato no insertado</p>";
            }



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



            $sql = "CREATE TABLE Resultados_Rosemberg ( 
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Pregunta_1 CHAR(1) NOT NULL,
                Pregunta_2 CHAR(1) NOT NULL,
                Pregunta_3 CHAR(1) NOT NULL,
                Pregunta_4 CHAR(1) NOT NULL,
                Pregunta_5 CHAR(1) NOT NULL,
                Pregunta_6 CHAR(1) NOT NULL,
                Pregunta_7 CHAR(1) NOT NULL,
                Pregunta_8 CHAR(1) NOT NULL,
                Pregunta_9 CHAR(1) NOT NULL,
                Pregunta_10 CHAR(1) NOT NULL,
                Total INT(6) NOT NULL)";
        if(mysqli_query($conn, $sql)){
            echo "Tabla creada correctamente";
        }else{
            echo "Tabla no creada: " .mysqli_error($conn);
        }

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

            $conn->close();
        ?>
	</body>
</html>