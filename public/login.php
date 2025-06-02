<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../private/db/conexion.php';
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: admin.php");
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<form method="POST">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="password" required>
    <button type="submit">Ingresar</button>
</form>

