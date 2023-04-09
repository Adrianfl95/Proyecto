<html>
    <head>
	<title>Nuevo Empleado</title>
    <link rel="stylesheet" href="../css/stylo.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
	<?php include_once('header_forms.php'); ?>

	<h1>Formulario</h1>
	<h2>Registro de nuevo empleado</h2>

	<form method="POST" action="../insertar_datos/insertaEmpleado.php">
	    Código del empleado:<br>
	    <input type="text" id="codigo_empleado" name="codigo_empleado" />
	    <br><br>
 
	    Nombre:<br>
	    <input type="text" id="nombre" name="nombre" />
	    <br><br>

        Curso:<br> 
	    <input type="text" id="curso" name="curso"/>
	    <br><br>

		Departamento:<br> 
	    <input type="text" id="departamentosId" name="departamentosId"/>
	    <br><br>

		<input type="submit" value="ENVIAR" />
		<input type="reset" value="LIMPAR" />

	</form>


    </body>
    
</html>
