<?php
	//Conector para crear base de datos de login
	mysqli_report(MYSQLI_REPORT_OFF);
	$estado_de_la_conexion = "";
    $conector = mysqli_connect("db", "root");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = 0;
    }
	else
		$estado_de_la_conexion = 1;
	

?>
