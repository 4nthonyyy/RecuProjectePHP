<?php
$host = "localhost"; // Servidor de base de datos
$usuario = "root"; // Usuario de MySQL
$contraseña = ""; // Contraseña (si no tienes una, déjala vacía)
$base_de_datos = "mi_base_de_datos"; // Nombre de tu base de datos

// Conectar a la base de datos
$conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Opcional: Mensaje de éxito para depuración
echo "Conexión exitosa";
?>
