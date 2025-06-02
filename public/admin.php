<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
echo "<h1>Bienvenido, " . $_SESSION["usuario"] . "</h1>";
?>
