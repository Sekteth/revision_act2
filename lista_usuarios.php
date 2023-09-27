<?php
include("conexion.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

// Verificar si hay errores en la consulta SQL
if ($result === FALSE) {
    die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["usuario"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td><a href='editar_usuario.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar_usuario.php?id=" . $row["id"] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No hay usuarios registrados.</td></tr>";
}

$conn->close();
?>

