	<h2 class="center">Departamentos de los empleados</h2></br>

		<table id="empleados">
    	<tr>
			<th> id </th>
			<th> localidad </th>
			<th> nombre </th>		
		</tr>

<?php
		
		// preparamos los statements
		
		$stmt = $conector->prepare("SELECT * FROM departamentos");
		
		// los ejecutamos
		
		$stmt->execute();
		
		// Guardamos el resultado
		
		$result = $stmt->get_result();
	
		// si el resultado ha devuelto lineas, procedemos a su display
	
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				echo "<td>" . $row["id"] . "</td>". 
					 "<td>" . $row["localidad"] . "</td>" .
					 "<td>" . $row["nombre"] . "</td>" . 
					 "</tr>";
	
			}
		}	else {
				echo "0 results";
		}
		
		

		?>
		</table>