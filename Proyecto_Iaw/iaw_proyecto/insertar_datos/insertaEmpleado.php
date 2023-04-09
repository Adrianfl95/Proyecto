    <head>
        <title>Nuevo Empleado</title>
    </head>
    <link rel="stylesheet" href="./css/stylo.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado del registro del nuevo empleado</h1>
	<?php
		include '../basedatos/conector.php';
		// Recogemos datos del formulario y los validamos
		$codigo = $_POST['codigo_empleado'];
		$nombre = $_POST['nombre'];
		$curso = $_POST['curso'];
		$departamento = $_POST['departamentosId'];
		
		$ErrorCodigo = $ErrorNombre = $ErrorCurso = $ErrorDepartamento = "";
		
		if(!preg_match("/^[0-9]*$/", $codigo)){
			 $ErrorCodigo = "solo numeros.";
			 echo $ErrorCodigo;
			?>
		<div class="center">
	    <form action="../forms/insertaEmpleadoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
	<?php
		die;}

		elseif  (!preg_match ("/^[a-zA-z]*$/", $nombre) ){  
		$ErrorNombre = "solo letras y espacios en blanco.";  
		echo $ErrorNombre;
	
		?>
		<div class="center">
	    <form action="../forms/insertaEmpleadoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
	
		<?php
		die;}
		
				elseif  (!preg_match ("/^[a-zA-z]*$/", $curso) ){  
		$ErrorCurso = "solo numeros.";  
		echo $ErrorCurso;
	
		?>
		<div class="center">
	    <form action="../forms/insertaEmpleadoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
		<?php
		die;}
		
				elseif  (!preg_match ("/^[a-zA-z]*$/", $departamento) ){  
		$ErrorDepartamento = "solo letras y espacios en blanco.";  
		echo $ErrorDepartamento;
	
		?>
		<div class="center">
	    <form action="../forms/insertaEmpleadoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
		<?php
		die;}
		
		else
			
		// Despues de pasar la validacion de formulario los introducimos a la base de datos
		
		if (empty($curso)){
			$curso = NULL;
		}
			else {
			echo "";
			}
		
		
		$stmt = $conector->prepare("INSERT INTO empleados (codigo_empleado, nombre, cursoId, departamentosId) VALUES(?, ?, ?, ?)");
		$stmt->bind_param("isss", $codigo, $nombre, $curso, $departamento);
		
		 if ($stmt->execute())
		{
	    echo "<h3 class='center'>Empleado " . $nombre ." creado correctamente."."<br></h3>";
	    } 
		else { 
		echo "<h3 class='center'>no se pudo crear correctamente al empleado " . $nombre ."<br></h3>";
		}
		
		$stmt->close();
		$conector->close();
	?>
	<div class="center">
	    <form action="../forms/insertaEmpleadoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>


