<?php
$host = "localhost"; // Nombre del servidor
$usuario = "root"; // Nombre de usuario de MySQL
$contraseña=""; 
// Crear conexión
try{
    $conexion=new PDO("mysql:host=$host;dbname=juegosingles",$usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
}catch(PDOException $error){
    echo "No se pudo conectar a la base de datos: ".$error->getMessage();
}
?>