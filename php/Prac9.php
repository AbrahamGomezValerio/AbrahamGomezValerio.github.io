<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica #9 - Operadores</title>
</head>
<body>
    <?php
        //Variables locales para toda la práctica
        $a=10; //variable númerico
        $b=5;
        $c=10;
        $d="10"; //variable texto

        echo "<h1> Operadores aritméticos </h1>";
           $suma=$a + $b;
           $resta=$a - $b;
           $mult=$a * $b;
           $div=$a / $b;
           $mod=$a % $b;

            echo "Esto es una <b> suma </b> $a+$b = $suma <br><br>";
            echo "Esto es una <b> resta </b> $a-$b = $resta <br><br>";
            echo "Esto es una <b> multiplicación </b> $a*$b = $mult <br><br>";
            echo "Esto es una <b> división </b> $a/$b = $div <br><br>"; 
            echo "Esto es un <b> modulo </b> o también conocido como el residuo de una división $a%$b = $mod <br><br>";
            function preincremento() {
                $a=10;
                $b=5;
                $preinca=++$a;
                $preincb=++$b;
                echo "Esto es un <b> incremento prefijo </b> de variable ++$ a = $preinca y con la variable ++$ b = $preincb (Que se suma 1 y después se evalua con la variable) <br><br> ";     
            }
            preincremento();

            function postincremento() {
                $a=10;
                $b=5;
                $postinca=$a++;
                $postincb=$b++;
                echo "Esto es un <b> incremento postfijo </b> de variable $ a++ = $postinca y con la variable $ b++ = $postincb (Que en este caso primero se evalua la variable y luego se suma) <br>";
            }
            postincremento();
            //
            echo "<h1> Operadores condicionales </h1>";
            $igual1 = ($a==$b) ? "<b>Son iguales</b>" : "<b>Son diferentes</b>";
            $igual2 = ($a==$c) ? "<b>Son iguales</b>" : "<b>Son diferentes</b>";
            $identico = ($a===$d) ? "<b>Son iguales</b>" : "<b>Son diferentes</b>";
            $distinto1 = ($a != $b) ? "<b>Son distintos</b>" : "<b>Son iguales</b>";
            $distinto2 = ($a != $c) ? "<b>Son distintos</b>" : "<b>Son iguales</b>";
            $mayor = ($a>$b) ? "<b>Es mayor</b>" : "<b>Es menor</b>";
            $menor = ($a<$b) ? "<b>Es mayor</b>" : "<b>Es menor</b>";

            echo "El operador == nos ayuda a saber si 2 valores son iguales, tenemos los valores a = $a, b = $b y c = $c. <br> 
            Si se compara a con b el resultado es $igual1, pero si se hace a con c, entonces $igual2. <br> <br>";

            echo "En el caso del === identifica tanto si son iguales, pero teniendo en cuenta si son también del mismo dominio (que el texto sea texto y los números sean números)<br>
            como el caso de d que es $d y a que es $a, siendo que si se aplica con estos 2 el resultado es $identico. <br> <br>";
            
            echo "El operador != ayuda a saber si 2 valores son distintos entre sí como viene siendo a = $a y b = $b que $distinto1.<br>
            Pero con a = $a y c = $c que $distinto2. <br> <br>";

            echo "Los operadores que usan < > nos ayudan a indentificar si los valores númericos pueden ser mayor, menor o mayor que y menor que, <br>
            por ejemplo se sabe que a = $a y b = $b el valor de a es mayor siendo $a>$b $mayor, pero si fuera al revés sería $a<$b $menor. <br>";
            //
            echo "<h1> Operadores de asignación</h1>";
            function mismo(){
                $a=10;
                $b=5;
                echo "El operador de = en asignación hace que el valor de la izquierda adquiera el valor de la variable de la derecha. <br>
                Se tiene que a = $a y b = $b <br>";
                $mismo = ($a=$b);
                echo "Pero una operación con el operador ($ a = $ b) se tiene $mismo ya que hizo que el valor de a que antes era 10 se volviera en 5. <br> <br>";
            }
            mismo();
            function suma(){
                $a=10;
                $b=5;
                echo "Existe una variación para el operador aritmético de la suma, siendo este representado como +=, este hace que el valor de la izquierda se sume al valor que tenga a la derecha. <br>
                Haciendo que si tenemos la variable a = $a y la variable b = $b <br>";
                $Sum = ($a+=$b);
                echo "Si se hace dicha operación (a+=b) el nuevo valor de a = $a <br> <br>";
            }
            suma();
            function resta(){
                $a=10;
                $b=5;
                echo "Para la variación de la resta, siendo este representado como -=, este hace que el valor de la izquierda se reste al valor que tenga a la derecha. <br>
                Haciendo que si tenemos la variable a = $a y la variable b = $b <br>";
                $Res = ($a-=$b);
                echo "Si se hace dicha operación (a-=b) el nuevo valor de a = $a <br> <br>";
            }
            resta();
            function multi(){
                $a=10;
                $b=5;
                echo "De igual manera se aplica para al multiplicación, siendo este representado como *=, este hace que el valor de la izquierda se multiplique por el valor que tenga a la derecha. <br>
                Haciendo que si tenemos la variable a = $a y la variable b = $b <br>";
                $Mult = ($a*=$b);
                echo "Si se hace dicha operación (a*=b) el nuevo valor de a = $a <br> <br>";
            }
            multi();
            function divi(){
                $a=10;
                $b=5;
                echo "Así mismo para la división, siendo este representado como +=, este hace que el valor de la izquierda se divida por el valor que tenga a la derecha. <br>
                Haciendo que si tenemos la variable a = $a y la variable b = $b <br>";
                $divi = ($a/=$b);
                echo "Si se hace dicha operación (a/=b) el nuevo valor de a = $a <br> <br>";
            }
            divi();
            function modul(){
                $a=10;
                $b=5;
                echo "También se puede hacer con el residuo de la división o el modulo, siendo este representado como %=, este hace que el valor de la izquierda se divida al valor que tenga a la derecha, pero mostrando solo el residuo de la división. <br>
                Haciendo que si tenemos la variable a = $a y la variable b = $b <br>";
                $modul = ($a%=$b);
                echo "Si se hace dicha operación (a%=b) el nuevo valor de a = $a <br>";
            }
            modul();
            //
            echo "<h1>Operadores lógicos</h1>";
            function annd(){
                $edada = 18;
                $id= true;
                echo "El primer operador lógico es el <b>AND</b> el cual devolverá un valor verdadero solo si ambas variables o expresiones son verdaderas. <br>
                Por ejemplo se tiene una variable de edad el cual es $edada, el cual se quiere saber si ese valor hace que sea mayor de edad por lo que se puede realizar una if el cual determinará es mayor o menor. <br>";
                if ($edada = 18 && $id) {
                    echo "<b>La edad es mayor de edad</b> <br><br>";
                } else {
                    echo "<b>La edad es menor de edad</b> <br>";
                }
            }
            annd();
            function oor(){
                $admin = true;
                $especial = false;
                echo "El segundo operador es el <b>OR</b> el cual devolverá un valor verdadero si uno de las 2 variables o expresiones es verdadera. <br>
                Por ejemplo se tiene un usuario admin el cual tiene valor de true y otro usuario que es especial que tiene valor de false, realizando otro if para saber si se puede dar acceso a uno de los 2 usuarios con diferentes permisos.<br>";
                if ($admin || $especial) {
                    echo "<b>Si tiene acceso</b> <br><br>"; 
                } else {
                    echo "<b>No tiene acceso</b> <br><br>";
                }
            }
            oor();
            function noot(){
                echo "El tercero es el <b>NOT</b> el cual invierte los valores de true a false y viceversa <br>";
                echo "Por ejemplo se tiene una variable que tiene valor de false (esta activado), pero al pasar por un if que aplica el operador este se pondrá como desactivado <br>";
                $Activo = false;
                if (!$Activo) {
                    echo "<b>Ahora está desactivado</b><br>";
                }
                
            }
            noot();
            //
            echo "<h1>Operadores de cadena</h1>";
            $var = "Hola";
            $var2 = $var."Mundo";

            echo "En este tipo de operadores se tiene la concatenación el cual sirve para unir 2 variables en una sola, esta se representa con un punto. <br>
            Se tiene una variable que imprime $var, pero se puede crear otra variable el cual pueda usar el valor de la variable ya creada y concatenar un valor propio (var2=var.mundo) dando como resultado $var2 <br><br>";
        
            echo "De igual manera se puede representar como .= usando el mismo ejemplo para asignarle o ponerle una nueva cadena a una variable existente (var.=Mundo) dando como resultado = ";
            function conca(){
                $var="Hola";
                $var.="Mundo";
                echo $var;
            }
            conca();
    ?>
</body>
</html>