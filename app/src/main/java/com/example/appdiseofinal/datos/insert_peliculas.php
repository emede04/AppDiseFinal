<?php

$server = "localhost";
$user = "root";
$pass = "clave";
$bd = "BD_Letterboxd";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd)
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$nombre = $_GET["nombre"];
$autor = $_GET["autor"];
$anio = $_GET["anio"];
$descripcion =  $_GET["descripcion"];
$imagen  =  $_GET["imagen"];
$sql = "INSERT INTO Pelicula (nombre, autor , anio, descripcion, Imagen) VALUES ('$nombre','$autor','$anio','$descripcion','$imagen')";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
echo $sql;


if (mysqli_query($conexion, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

//desconectamos la base de datos
$close = mysqli_close($conexion)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>