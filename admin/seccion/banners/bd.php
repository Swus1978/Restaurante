<?php
$servidor = "localhost";
$baseDatos = "restaurante";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);
    echo "Conexion establecida";
} catch (Exception $error) {
    echo $error->getMessage();
}
?>
