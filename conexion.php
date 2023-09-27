<?php
$servername = "localhost";
$username = "root"; // El nombre de usuario predeterminado en XAMPP es "root"
$password = ""; // Deja la contraseña en blanco por defecto
$dbname = "crud_app";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
