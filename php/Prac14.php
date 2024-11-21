<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica #14 - Creación de una tabla en una BD existente</title>
</head>
<body>
    <?php
    require("config.php");
    echo "<h1>Crear una tabla en una BD existente</h1>";

    try {
        // Conexión a la base de datos usando PDO
        $dsn = "pgsql:host=$host;port=$port;dbname=$BD";
        $conexion = new PDO($dsn, $usuario, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Definir nombre de la tabla y el script SQL para crearla
        $tabla = "prueba1";
        $consulta = "
            CREATE TABLE IF NOT EXISTS $tabla (
                id int(10) ,
                nombre VARCHAR(50)
            );
        ";

        // Ejecutar la consulta para crear la tabla
        $conexion->exec($consulta);

        echo "La tabla '$tabla' se creó correctamente en la base de datos '$BD' <br>";
        echo "El Script utilizado fue: <pre>$consulta</pre><br>";

    } catch (PDOException $e) {
        echo "Error al crear la tabla: " . $e->getMessage();
    } finally {
        // Cierra la conexión
        $conexion = null;
    }
    ?>
</body>
</html>
