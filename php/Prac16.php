<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #16 - Subir formulario a una BD</title>
</head>
<body>
    <?php
require("config.php"); // Archivo con las credenciales de conexión

try {
    // Conexión a la base de datos PostgreSQL
    $dsn = "pgsql:host=$host;port=$port;dbname=$BD";
    $conexion = new PDO($dsn, $usuario, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // Recibir datos del formulario
    $nombre = $_POST['Nombre'];
    $email = $_POST['Correo'];
    $edad = $_POST['Edad'];

    // Consulta SQL para insertar datos
    $consulta = "INSERT INTO usuarios (nombre, correo, edad) VALUES (:nombre, :correo, :edad)";
    $stmt = $conexion->prepare($consulta);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $email);
    $stmt->bindParam(':edad', $edad);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro guardado con éxito";
    } else {
        echo "Error al guardar el registro";
    }
} catch (PDOException $e) {
    echo "Error en la conexión o consulta: " . $e->getMessage();
}
?>
</body>
</html>
