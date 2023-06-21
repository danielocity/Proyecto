<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos enviados por el formulario
  $sum = 0;

  $q1 = $_POST['1'];
  $sum += valor1($q1);

  $q2 = $_POST['2'];
  $sum += valor1($q2);

  $q3 = $_POST['3'];
  $sum += valor1($q3);

  $q4 = $_POST['4'];
  $sum += valor1($q4);

  $q5 = $_POST['5'];
  $sum += valor1($q5);

  $q6 = $_POST['6'];
  $sum += valor2($q6);

  $q7 = $_POST['7'];
  $sum += valor2($q7);

  $q8 = $_POST['8'];
  $sum += valor2($q8);

  $q9 = $_POST['9'];
  $sum += valor2($q9);
  
  $q10 = $_POST['10'];
  $sum += valor2($q10);

  // Establecer la conexión con la base de datos
  $servername = "localhost";
  $username = "admin";
  $password = "amiel4041";
  $dbname = "datos_test";

  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    die("Sin conexión: " .mysql_connect_error());
  }

  $sql = "INSERT INTO Resultados_Rosemberg 
    (Pregunta_1, Pregunta_2, Pregunta_3, Pregunta_4, Pregunta_5, Pregunta_6, Pregunta_7, Pregunta_8, Pregunta_9, Pregunta_10, Total) 
    VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$sum')";

$conn->query($sql);  
$conn->close();

  // Redireccionar a la página de resultados con la suma total
  header("Location: Resultado.php?sum=$sum");
  exit();
}

function valor1($param){
  switch($param){
    case "A": return 4; break;
    case "B": return 3; break;
    case "C": return 2; break;
    case "D": return 1; break;
  }
}

function valor2($param){
  switch($param){
    case "A": return 1; break;
    case "B": return 2; break;
    case "C": return 3; break;
    case "D": return 4; break;
  }
}

?>
