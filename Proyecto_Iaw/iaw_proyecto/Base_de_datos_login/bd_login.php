<?php

include 'bd_login.php';

$creardb = "CREATE DATABASE quaktis";
$nombredb = "login";

if (mysqli_query($conector, $creardb)) {
		    echo "la base de datos $nombredb  creada correctamente"."<br>";
		} else {
		    echo "ERROR al crear la Base de datos $nombredb <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, $nombredb);

if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a $nombredb " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
}







$tablaInfo = "CREATE TABLE IF NOT EXISTS `info` (
`infoID` int(100) NOT NULL,
  `firstName` varchar(199) DEFAULT NULL,
  `lastName` varchar(199) DEFAULT NULL
);";

	$conectorbdd = mysqli_connect("localhost", "root", "", "login");
	
	if (mysqli_query($conectorbdd, $tablaInfo)) {
		    echo "Tabla <b> info </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}


$valoresInfo = "INSERT INTO `info` (`infoID`, `firstName`, `lastName`) VALUES
(11, 'kumar', 'Deepak');";

	if (mysqli_query($conectorbdd, $valoresInfo)) {
		    echo "Se han introdicudo los <b> valores </b> correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}


$TablaUser = "CREATE TABLE IF NOT EXISTS `user_tbl` (
`userID` int(5) unsigned NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
);";

	if (mysqli_query($conectorbdd, $TablaUser)) {
		    echo "Táboa <b> user </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}



$valoresUser = "INSERT INTO `user_tbl` (`userID`, `username`, `password`) VALUES
(3, 'admin', 'admin');";

	if (mysqli_query($conectorbdd, $valoresUser)) {
		    echo "Valores <b> user </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}


$pkInfo = "ALTER TABLE `info`
 ADD PRIMARY KEY (`infoID`);";

	if (mysqli_query($conectorbdd, $pkInfo)) {
		    echo "Táboa <b> pkInfo </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}
$pkUser = "ALTER TABLE `user_tbl`
 ADD PRIMARY KEY (`userID`);";
 
 	if (mysqli_query($conectorbdd, $pkUser)) {
		    echo "Táboa <b> pkUser </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}



$valoresPkInfor = "ALTER TABLE `info`
MODIFY `infoID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;";

	if (mysqli_query($conectorbdd, $valoresPkInfor)) {
		    echo "Táboa <b> valoresPkInfor </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}

$valoresPkUser = "ALTER TABLE `user_tbl`
MODIFY `userID` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;";

	if (mysqli_query($conectorbdd, $valoresPkUser)) {
		    echo "Táboa <b> valoresPkUser </b> creada correctamente. <br>";
  		    
		} else {
		    echo "Non foi poislbe crear a táboa ou xa esite na BBDD.<br>". " Erro: " . mysqli_error($conn)."<br/>";
		}

?>