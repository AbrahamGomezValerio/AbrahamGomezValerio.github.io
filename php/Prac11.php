<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #11 - MySQL y PHP</title>
</head>
<body>
<?php
require ("config.php"); //Llamar al archivo donde están las variables de la BD
echo "<h1>Práctica de conexión a mi servidor de datos MYSQL </h1>";
if ($conexion=mysqli_connect($host, $port, $usuario, $password, $BD)) //Para saber si se hizo la conexión de la BD
{
    echo "Tu conexión ha sido exitosa <br>";
} else {
    echo "Error conectando con MYSQL <br>" .mysqli_connect_error(); //Función para saber cual es error de porque no se conecto la BD
}
echo "<br><br>";
mysqli_close($conexion); //Cerrar el servidor
?>
</body>
</html>