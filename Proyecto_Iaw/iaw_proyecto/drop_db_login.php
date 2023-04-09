<?php
// script que borra la base de datos de login

//creamos la conexion

$conector = mysqli_connect("localhost", "root", "");

// pasamos la query

$query = ('DROP DATABASE login');
$conector->query($query);
echo "base de datos login borrada correctamente"
?>