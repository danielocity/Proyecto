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
            $conn->close();
        ?>
	</body>
</html>