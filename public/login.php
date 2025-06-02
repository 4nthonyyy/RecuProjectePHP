<?php
include 'conexion.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

if (password_verify($password, $fila['password'])) {
    $_SESSION["usuario"] = $fila['nombre'];
    header("Location: admin.php");
} else {
    echo "Error en login.";
}
?>
