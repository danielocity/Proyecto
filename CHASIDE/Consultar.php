<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     span{
        display: flex;
     }

     .fondo{
        background: url("bg1.jpg");
     }
      table {
        border: solid 2px #000000;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
                     
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
<body background-color: #ffffff;>
   
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


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor";
        }
  else
        {
            echo "<b><h3>Usuarios Registrados: </h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "cuestionario";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        
        }
        
        $consulta = "SELECT * FROM resultados";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
//echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Aptitud</th></h1>";
echo "<th><h1>Interes</th></h1>";
echo "<th><h1>Puntaje Aptitudes</th></h1>";
echo "<th><h1>Puntaje Intereses</th></h1>";

echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    //echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['ResAptitud'] . "</td></h2>";
    echo "<td><h2>" . $colum['resInteres'] . "</td></h2>";
    echo "<td><h2>" . $colum['puntaje_in'] . "</td></h2>";
    echo "<td><h2>" . $colum['puntaje_ap'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.php"> Volver Atrás</a>';
?>