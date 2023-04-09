<?php
	//Creo el conector una vez creada la BBDD
	include './basedatos/constants.php';
	mysqli_report(MYSQLI_REPORT_OFF);
	$estado_de_la_conexion = "";
    $conector = @mysqli_connect(HOST, USER, PASSWORD);
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = -1;
    }
	else
		$estado_de_la_conexion = 0;
	

?>
