<html>
    <head>
        <title>Novo Curso</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado da solicitude</h1>
	<?php
		include '../basedatos/conector.php';

		// Recogemos los datos del formulario y los validamos

		$ErrorNombre = $ErrorCodigo_curso = "";
		

		$nombre = $_POST['nombre'];
		$codigo_curso = $_POST['codigo_curso'];
		if(!preg_match("/^[a-zA-z]*$/", $nombre)){
			 $ErrorNombre = "solo letras y espacios en blanco.";
			 echo $ErrorNombre;
			?>
		<div class="center">
	    <form action="../forms/insertaCursoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
	<?php
		die;}

		elseif  (!preg_match ("/^[0-9]*$/", $codigo_curso) ){  
		$ErrorCodigo_curso = "solo numeros.";  
		echo $ErrorCodigo_curso;  
	
		?>
		<div class="center">
	    <form action="../forms/insertaCursoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
	
		<?php
		die;}
		
		else
			
	// Despues de pasar la validacion de formulario los introducimos a la base de datos

		$stmt = $conector->prepare("INSERT INTO curso (nombre, codigo_curso) VALUES(?, ?)");
		$stmt->bind_param("si", $nombre, $codigo_curso);
		
		 if ($stmt->execute())
		{
	    echo "<h3 class='center'>Curso " . $nombre ." creado correctamente."."<br></h3>";
	    } 
		else { 
		echo "<h3 class='center'>no se pudo crear correctamente el Curso " . $nombre ."<br></h3>";
		}
	?>
	<div class="center">
	    <form action="../forms/insertaCursoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
    </body>
</html>
