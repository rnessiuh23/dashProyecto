<?php

// Detalles de conexión a la base de datos
$host = "localhost:3307";
$user = "root";
$password = "";
$db_name = "DBSys";

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $db_name);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>