	<h2 class="center">Empleados de ViverosSL</h2></br>

		<table id="empleados">
    	<tr>
			<th> id </th>
			<th> codigo_empleado </th>			
			<th> nombre </th>			
			<th> curso </th>
			<th> departamento </th>
		</tr>
		<tr>
		
		
		<?php
		// CURSOS
		
		//variables
		
		// preparamos los statements
		
		$stmt = $conector->prepare("SELECT * FROM empleados");
		
		// los ejecutamos
		
		$stmt->execute();
		
		// Guardamos el resultado
		
		$result = $stmt->get_result();
	
		// preparamos los statements
	
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>" . 
					 "<td>" . $row["codigo_empleado"] . "</td>" .
					 "<td>" . $row["nombre"] . "</td>" .
					 "<td>" . $row["cursoId"] . "</td>" .
					 "<td>" . $row["departamentosId"] . "</td>" .
					 "</tr>";
			}
		} else {
			echo "0 results";
		}

		?>
		</table>