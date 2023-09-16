<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Resultado</title>
</head>
<body>
    <h3>RESULTADOS:</h3>
    <?php 
        function sumar($a, $b){
            if($a == '' || $b == ''){
                return "Por favor ingrese valores para sumar";
            }else{
                return "$a + $b = ".($a + $b);
            }
        };

        function restar($a, $b){
            if($a == '' || $b == ''){
                return "Por favor ingrese valores para restar";
            }else{
                return "$a - $b = ".($a - $b);
            }            
        };

        function multiplicar($a, $b){
            if($a == '' || $b == ''){
                return "Por favor ingrese valores para multiplicar";
            }else{
                return "$a x $b = ".($a * $b);
            }
        };

        function dividir($a, $b){
            if($a == '' || $b == ''){
                return "Por favor ingrese valores para dividir";
            }else{
                if($b == 0){
                    return "No es posible dividir un numero entre cero (0)";
                }else{
                    return "$a / $b = ".($a / $b);
                }                
            }            
        };

        function comparar($a, $b){
            if($a == '' || $b == ''){
                return "Por favor ingrese valores para comparar";
            }else{
                if($a < $b){
                    return "$b es el mayor y $a es el menor";
                }elseif($a > $b){
                    return "$a es el mayor y $b es el menor";
                }else{
                    return "los numeros ingresados son iguales";
                }
            }
        };

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            $operacion_usuario = $_POST["operacion"];
            
            if($operacion_usuario == "Sumar"){
                echo sumar($n1, $n2);
            }elseif($operacion_usuario == "Restar"){
                echo restar($n1, $n2);
            }elseif($operacion_usuario == "Multiplicar"){
                echo multiplicar($n1, $n2);
            }elseif($operacion_usuario == "Dividir"){
                echo dividir($n1, $n2);
            }else{
                echo comparar($n1, $n2);
            };
        }

        echo "<br><br>";
        echo "<form action='logica.php' method='post'>";
            echo "<input type='text' name='num1' value='$n1'>";
            echo "<input type='text' name='num2' value='$n2'>";
            echo "<br><br>";
            echo "<button class='opciones' id='efecto' type='submit' name='operacion' value='Sumar'>Sumar</button>";
            echo "<button class='opciones' id='efecto' type='submit' name='operacion' value='Restar'>Restar</button>";
            echo "<button class='opciones' id='efecto' type='submit' name='operacion' value='Multiplicar'>Multiplicar</button>";
            echo "<button class='opciones' id='efecto' type='submit' name='operacion' value='Dividir'>Dividir</button>";
            echo "<button class='opciones' id='efecto' type='submit' name='operacion' value='Comparar'>Comparar</button>";
        echo "</form>";
    ?>
</body>
</html>