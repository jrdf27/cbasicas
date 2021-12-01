<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];



$insertar = "INSERT INTO clientes VALUES('$nombre','$apellido','$email')";

$query = mysqli_query($conectar,$insertar);

if($query){

	echo 'correcto';
}else{
	$error = mysqli_error();
	echo "incorrecto";

}

?>