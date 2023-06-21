<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname = "Test";
    
    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Sin conexión: " .mysql_connect_error());
    }

    echo "Conexión correcta";

    $sql = "CREATE DATABASE Test";
    if(mysqli_query($conn,$sql)){
        echo "Bases de datos creada correctamente";
    }else{
        echo "No se creo la base de datos: " .mysqli_error($conn);
    }
    
    mysqli_select_db($conn, $dbname);

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
    mysqli_close($conn);
?>