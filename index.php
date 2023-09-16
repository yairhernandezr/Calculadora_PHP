<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Calculadora 2</title>
</head>
<body>
    <h1>Calculadora marca acme</h1>
    <form action="logica.php" method="post">
        <input type="number" name="num1" placeholder="Ingresar el primer numero">
        <input type="number" name="num2" placeholder="Ingresar el segundo numero">
        <br>
        <p>Seleccionar la operación a realizar con los numeros ingresados: </p>
        <button class="opciones" id="efecto" type="submit" name="operacion" value="Sumar">Sumar</button>
        <button class="opciones" id="efecto" type="submit" name="operacion" value="Restar">Restar</button>
        <button class="opciones" id="efecto" type="submit" name="operacion" value="Multiplicar">Multiplicar</button>
        <button class="opciones" id="efecto" type="submit" name="operacion" value="Dividir">Dividir</button>
        <button class="opciones" id="efecto" type="submit" name="operacion" value="Comparar">Comparar</button>
    </form>
</body>
</html>