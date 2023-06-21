<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #000000;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #ffffff;
      }

      td,
      th {
        border: solid 1px #000000;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "admin";
$pass = "amiel4041";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$interes = $_POST["inte"] ;
// $nombre = $_POST["nreg"] ;
$aptitud = $_POST["apt"] ;
$puntaje_in = $_POST["resultadoG"];
$puntaje_ap = $_POST["resultadoG1"];

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor";
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "datos_test";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO resultados (Nombre, ResInteres, ResAptitud, puntaje_in, puntaje_ap)
                             VALUES ('','$interes','$aptitud','$puntaje_in','$puntaje_ap')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        if($resultado){
          echo "<h2><p>Registro exitoso</p></h2>";
        }
        
mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.php"> Volver Atrás</a>';


?>