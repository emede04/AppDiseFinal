<?php

$server = "localhost";
$user = "root";
$pass = "clave";
$bd = "BD_Letterboxd";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd)
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql = "SELECT * FROM `Pelicula`" ;
mysqli_set_charset($conexion, "utf8");
if(!$result = mysqli_query($conexion, $sql)) die();

$pelicula = array();

while($row = mysqli_fetch_array($result)) {
            $nombre = $row['nombre'];
            $autor = $row["autor"];
            $anio = $row["anio"];
            $descripcion = $row["descripcion"];
            $imagen = $row["imagen"];

        $pelicula[] = array('nombre'=>$nombre, 'autor'=>$autor, 'anio'=>$anio, 'descripcion'=>$descripcion, 'imagen' =>$imagen);

}
$close = mysqli_close($conexion)or die ("pue no ha podio ser");

$json_string = json_encode($pelicula);

echo $json_string;