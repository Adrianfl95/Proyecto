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
		
	    //conexiion a mysql
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("Non se puido abrir a conexión");

	    //Se hai conexión lanzo queries de creación de bases de datos e táboas

	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente. <br>";
			
		//Query para crear la base de datos
	    $createDatabase = "CREATE DATABASE ".DB;

		if (mysqli_query($conector, $createDatabase)) {
		    echo "base de datos ".DB. " creada correctamente"."<br>";
  		    
		} else {
		    echo "No fue posible crear la base de datos . <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, DB);

	    // Comprobar que estamos cnectados a la base de datos
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a la base de datos: " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
	    }

	    // Creamos las tablas
		
		// Tabla cursos
    		$tabla_curso = "CREATE TABLE curso (
  			id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			nombre VARCHAR(50) NOT NULL UNIQUE,
  			codigo_curso INT(10) NOT NULL UNIQUE
			);";
		
		if (mysqli_query($conector, $tabla_curso)) {
		    echo "Tabla curso creada correctamente. <br>";
  		    
		} else {
		    echo "no fue posible crear la tabla.<br>". " Error: " . mysqli_error($conector);
		}
		
		
		// Tabla para los departamentos
    		$tabla_departamentos = "CREATE TABLE departamentos (
  			id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			localidad VARCHAR(50) NOT NULL,
			nombre VARCHAR(50) NOT NULL UNIQUE
			);";
		
		if (mysqli_query($conector, $tabla_departamentos)) {
		    echo "Tabla departamentos creada correctamente. <br>";
  		    
		} else {
		    echo "no fué posible crear la tabla o ya existe en la base de datos.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}


		// Táboa empleados
    		$tabla_empleados = "CREATE TABLE empleados (
  			id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  			codigo_empleado INT(10) NOT NULL UNIQUE,
  			nombre VARCHAR(30) NOT NULL,
  			cursoId VARCHAR(50),
			departamentosId VARCHAR(50),
			CONSTRAINT fk_curso
  			FOREIGN KEY (cursoId)
    			REFERENCES curso(nombre),
			CONSTRAINT fk_departamentos
			FOREIGN KEY (departamentosId)
				REFERENCES departamentos(nombre)
			);";
		
		if (mysqli_query($conector, $tabla_empleados)) {
		    echo "Tabla empleados creada correctamente. <br>";
  		    
		} else {
		    echo "No fué posible crear la tábla o ya existe en la base de datos.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

	
	

	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	mysqli_close($conector);
	?>
    </body>
</html>
