<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: lista_usuarios.php");
        exit;
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}
?>
