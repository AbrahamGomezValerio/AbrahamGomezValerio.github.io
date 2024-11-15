<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #12 - Conexión y Creación de una BD en PostgreSQL</title>
</head>
<body>
<?php
require("config.php"); // Llamar al archivo donde están las variables de la BD

echo "<h1>Práctica de Creación de una BD en PostgreSQL</h1>";

// Nombre de la base de datos a crear
$basededatos = "Progweb1";

try {
    // Conexión inicial sin especificar una base de datos para poder crear una nueva
    $dsn = "pgsql:host=$host;port=$port";
    $conexion = new PDO($dsn, $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query para crear la base de datos
    $consulta = "CREATE DATABASE $basededatos";

    // Ejecuta la consulta para crear la base de datos
    $conexion->exec($consulta);
    echo "La BD '$basededatos' se creó con éxito <br>";
    echo "El Script utilizado fue: $consulta <br><br>";

} catch (PDOException $e) {
    echo "Error al crear la base de datos: " . $e->getMessage();
} finally {
    // Cierra la conexión
    $conexion = null;
}
?>
</body>
</html>
