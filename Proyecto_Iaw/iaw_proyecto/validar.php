<?php

 // Recojemos los datos de el formulario
 
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

	// nos conectamos a la bdd login

$conexion = mysqli_connect("db","root","","login");

$consulta="SELECT*FROM user_tbl where username='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

	//si las filas devueltas existen entonces iremos al home del php_crud

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

	// sino iremos a la pagina de login

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
