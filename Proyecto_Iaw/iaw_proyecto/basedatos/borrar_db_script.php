<html>
    <head>
        <title>Creación BBDD</title>
    </head>
    <link rel="stylesheet" href="../css/stylo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <body>
	<?php
		include_once('header_database.php');
	    include 'constantes.php';

		echo "<h1>Script que borra la base de datos</h1>";	    	  
	    //Conexión coa BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("Non se puido abrir a conexión");

	    //Se hai conexión lanzo queries de borrado
	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente.<br>";
			mysqli_query($conector,'DROP DATABASE IF EXISTS '. DB) or die("Non se puido borrar a base de datos");
		}
	echo "Base de datos eliminada correctamente .<br>";

	mysqli_close($conector);
	?>
    </body>
</html>
