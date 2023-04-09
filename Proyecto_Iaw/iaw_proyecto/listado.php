<html>
    <head>
	<title>Resultados</title>
	<link rel="stylesheet" href="./css/stylo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	
	<?php include_once('./header.php'); ?>
    <?php include './basedatos/conector.php'; ?>

    <body>

	<?php
	if ($estado_de_la_conexion == 0){ 	
		echo '<h1 class="center">Datos por categoría</h1></br>';
		include_once('./listar/mostrar_empleados.php'); 
		include_once('./listar/mostrar_cursos.php'); 
		include_once('./listar/mostrar_departamentos.php'); 
	}
	else{
		echo "No se pudo conectar a la base de datos para consultar datos";
	}

	 ?>

    </body>
</html>
