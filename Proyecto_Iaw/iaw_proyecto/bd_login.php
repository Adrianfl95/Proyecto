<?php


	// incluimos el conector para crear la BDD

include 'conector_login.php';

$creardb = "CREATE DATABASE login";
$nombredb = "login";

if (mysqli_query($conector, $creardb)) {
		    echo "la base de datos $nombredb  creada correctamente"."<br>";
		} else {
		    echo "ERROR al crear la Base de datos $nombredb <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, $nombredb);
			
	// nos conectamos a la base de datos y comprobamos que funcione

if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a  " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
}





	//creamos una tabla

$tablaInfo = "CREATE TABLE IF NOT EXISTS `info` (
`infoID` int(100) NOT NULL,
  `firstName` varchar(199) DEFAULT NULL,
  `lastName` varchar(199) DEFAULT NULL
);";


	//creamos el conector para la base de datos

	$conectorbdd = mysqli_connect("db", "root", "", "login");
	
	// creamos la tabla info
	
	if (mysqli_query($conectorbdd, $tablaInfo)) {
		    echo "Tabla <b> info </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}


	// introducimos valores en la tabla info

$valoresInfo = "INSERT INTO `info` (`infoID`, `firstName`, `lastName`) VALUES
(11, 'kumar', 'Deepak');";

	if (mysqli_query($conectorbdd, $valoresInfo)) {
		    echo "Se han introdicudo los <b> valores </b> correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}


	// // creamos la tabla user_tbl

$TablaUser = "CREATE TABLE IF NOT EXISTS `user_tbl` (
`userID` int(5) unsigned NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
);";

	if (mysqli_query($conectorbdd, $TablaUser)) {
		    echo "Táboa <b> user </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}

	//introducimos valores en la tabla de usuarios

$valoresUser = "INSERT INTO `user_tbl` (`userID`, `username`, `password`) VALUES
(3, 'admin', 'admin');";

	if (mysqli_query($conectorbdd, $valoresUser)) {
		    echo "Valores <b> user </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}


	// modificamos la tabla info y creamos una clave primaria

$pkInfo = "ALTER TABLE `info`
 ADD PRIMARY KEY (`infoID`);";

	if (mysqli_query($conectorbdd, $pkInfo)) {
		    echo "Táboa <b> pkInfo </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}
		
	// modificamos la tabla user y añadimos clave primaria
		
$pkUser = "ALTER TABLE `user_tbl`
 ADD PRIMARY KEY (`userID`);";
 
 	if (mysqli_query($conectorbdd, $pkUser)) {
		    echo "Táboa <b> pkUser </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}

	// introducimos valores para la clave primaria de la tabla info

$valoresPkInfor = "ALTER TABLE `info`
MODIFY `infoID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;";

	if (mysqli_query($conectorbdd, $valoresPkInfor)) {
		    echo "Táboa <b> valoresPkInfor </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}
		
	// introducimos valores para la clave primaria de la tabla de usuarios

$valoresPkUser = "ALTER TABLE `user_tbl`
MODIFY `userID` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;";

	if (mysqli_query($conectorbdd, $valoresPkUser)) {
		    echo "Táboa <b> valoresPkUser </b> creada correctamente. <br>";
  		    
		} else {
		    echo "No fue posible crear la tabla o ya existe en la BDD.<br>". " Erro: " . mysqli_error($conector)."<br/>";
		}

?>
