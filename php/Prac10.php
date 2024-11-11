<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #10</title>
</head>
<body>
    <?php
echo "<h3>If-Else para determinar un número par o impar</h3>";
//verificar si un número es par o impar
$num=10;
//sentencia IF
if ($num % 2 == 0){
    echo "El número $num es par<br>";
} else {
    echo "El número $num es impar<br>";
}
echo "<h3>Switch para determinar que día es según la entrada de la variables</h3>";
$dia="Lunes";
switch($dia){
    case "Lunes": echo "HOY ES LUNES";
    break;
    case "Martes": echo "HOY ES MARTES";
    break;
    case "Miercoles": echo "HOY ES MIERCOLES";
    break;
    case "Jueves": echo "HOY ES JUEVES";
    break;
    case "Viernes": echo "HOY ES VIERNES";
    break;
    case "Sabado": echo "HOY ES SABADO";
    break;
    case "Domingo": echo "HOY ES DOMINGO";
    break;
    default: echo "ESE DÍA NO EXISTE MIJO :v";
}
    ?>
</body>
</html>