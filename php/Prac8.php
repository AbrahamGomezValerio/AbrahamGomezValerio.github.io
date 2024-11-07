<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #8</title>
</head>
<body>
   <?php
   function Mensaje () {
    echo "<br>";
    echo "Hola mundo <br><br>";
   }
   Mensaje();

   $a=10; //Variable global

    function Variables() {
    $b=15; //Variable local
    echo "Prueba de que se debe mostrar solo la variable local <br>";
    echo "La variable a es $a <br>";
    echo "La variable b es $b <br> <br>";
}
    Variables();
    echo "Prueba de que se debe mostrar solo la variable global <br>";
    echo "La variable a es $a <br>";
    echo "La variable b es $b <br> <br>";




   ?>
</body>
</html>