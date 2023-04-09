	<h2 class="center">Cursos Impartidos</h2></br>

		<table id="cursos">
    	<tr>
			<th> id </th>
			<th> nombre </th>
			<th> codigo_curso </th>
		</tr>
		<tr>
	<?php

		// preparamos los statements	
			
		$stmt = $conector->prepare("SELECT * FROM curso");
		
		// los ejecutamos
		
		$stmt->execute();
		
		// Guardamos el resultado
		
		$result = $stmt->get_result();
	
		// si el resultado ha devuelto lineas, procedemos a su display
	
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>". 
					 "<td>" . $row["nombre"] . "</td>" .
					 "<td>" . $row["codigo_curso"] . "</td>" . 
					 "</tr>";
	
			}
		}	else {
				echo "0 results";
		}
		
		?>
		</table>