<?php
include '../private/db/conexion.php';

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

echo "<h1>Lista de productos</h1>";

while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<h2>{$row['nombre']}</h2>";
    echo "<p>{$row['descripcion']}</p>";
    echo "<p>Precio: {$row['precio']}€</p>";
    echo "<hr>";
}
?>
