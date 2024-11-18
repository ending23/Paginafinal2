<?php
$servername = "localhost";
$username = "tu_usuario"; 
$password = "tu_contrasena";
$dbname = "Onlineshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
