<html>
    <head>
	<title>Nuevo Curso</title>
    <link rel="stylesheet" href="../css/stylo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Formulario</h1>
	<h2>Registro del nuevo curso</h2>	
	
	<form method="POST" action="../insertar_datos/insertaCurso.php">
	
            Nombre del curso:<br> 
	    <input type="text" id="nombre" name="nombre"/>
	    <br><br>

            Código del curso:<br> 
	    <input type="text" id="codigo_curso" name="codigo_curso"/>
	    <br><br>

		<input type="submit" value="ENVIAR" />
		<input type="reset" value="LIMPAR" />

	</form>


    </body>
    
</html>
