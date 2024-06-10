<?php
include('../modelo/conexion.php'); // Asegúrate de incluir tu archivo de conexión a la base de datos

// Suponiendo que $conexion es tu conexión PDO
$con = $conexion->prepare("SELECT * FROM animales");
$con->execute(); // Ejecuta la declaración preparada

$animales = array();
while ($consulta = $con->fetch(PDO::FETCH_ASSOC)) {
    $animales[] = array(
        'nomEsp_animal' => $consulta['nomEsp_animal'],
        'nomEng_animal' => $consulta['nomEsp_animal'],
        'sonido_animal' => $consulta['sonido_animal'],
        'img_animal' => base64_encode($consulta['img_animal']) // Si la imagen está almacenada en binario
    );
}

// Devuelve los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($animales);
?>