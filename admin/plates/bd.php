<?php
$servidor = "localhost";
$baseDatos = "restaurante";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Error de conexión: " . $error->getMessage();
}

