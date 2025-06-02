<?php
include '../private/db/conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE id='$id'";
mysqli_query($conexion, $sql);
header("Location: admin.php");
?>
