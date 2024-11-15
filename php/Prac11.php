<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #11 - PostgreSQL y PHP</title>
</head>
<body>
<?php
require("config.php");

echo "<h1>Práctica de conexión a mi servidor de datos PostgreSQL</h1>";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$BD";
    $conexion = new PDO($dsn, $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Tu conexión ha sido exitosa <br>";
} catch (PDOException $e) {
    echo "Error conectando con PostgreSQL: " . $e->getMessage();
}

echo "<br><br>";
$conexion = null; // Cerrar la conexión
?>
</body>
</html>
