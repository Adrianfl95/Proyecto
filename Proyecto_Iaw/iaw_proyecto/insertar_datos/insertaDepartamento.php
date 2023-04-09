    <head>
        <title>Departamentos</title>
    </head>
    <link rel="stylesheet" href="./css/stylo.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Crear departamentos</h1>
	<?php
		include '../basedatos/conector.php';
		// Recogemos datos del formuario y los validamos
		
		$localidad = $_POST['localidad'];
		$nombre = $_POST['nombre'];
		$ErrorLocalidad = $ErrorNombre = "";

	
			if(!preg_match("/^[a-zA-z]*$/", $localidad)){
			 $ErrorLocalidad = "solo letras y espacios en blanco.";
			 echo $ErrorLocalidad;
			?>
		<div class="center">
	    <form action="../forms/insertaDepartamentoForm.php">
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
	    <form action="../forms/insertaDepartamentoForm.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
		</div>
	
	
		<?php
		die;}
		
		else
		// Despues de pasar la validacion de formulario los introducimos a la base de datos
		
		$stmt = $conector->prepare("INSERT INTO departamentos (localidad, nombre) VALUES(?, ?)");
		$stmt->bind_param("ss", $localidad, $nombre);
		$localidad = $_POST['localidad'];
		$nombre = $_POST['nombre'];
		

		if ($stmt->execute())
		{
	    echo "<h3 class='center'>Departamento " . $nombre ." creado correctamente."."<br></h3>";
	    } 
		else { 
		echo "<h3 class='center'>no se pudo crear correctamente el departamento " . $nombre ."<br></h3>";
		}
	    
	?>
	<div class="center">
	    <form action="../forms/insertaDepartamentoForm.php">
		<input type="submit" value="Volver al formulario" />
            </form>
	</div>
    </body>
</html>
