<?php
include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$sql = "UPDATE usuarios SET nombre='$nombre' WHERE id='$id'";
mysqli_query($conexion, $sql);
?>
