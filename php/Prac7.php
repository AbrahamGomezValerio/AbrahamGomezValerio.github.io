<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #7 - PHP</title>
</head>
<body>
    <?php
    echo "HOLA! este es mi primer script en PHP <br>";

    // Este es una línea de comentario

    # Esto también es una línea de comentario

    /* Esto es un bloque
    de más de una línea
    de comentarios */

    $vartext = "Hola! Ahora estoy usando variables"; 
    echo $vartext . "<br>";

    $varnum1 = 4;
    $varnum2 = 4;
    $res = $varnum1 + $varnum2;
    echo "El resultado de la suma de $varnum1 y $varnum2 es = $res";
    ?>
</body>
</html>
