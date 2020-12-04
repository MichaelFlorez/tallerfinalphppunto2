<!doctype html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Cálculos matemáticos</title>
        </head>
    <body>
        <form action="Calculofactorial.php" method="post">
            <h3>Factorial</h3>
            <p>Ingrese un número para calcular su factorial</p>
            <input type="text" name="Valor1" id="Valor1" >
            <input type="submit" name="calcular" value="calcular">
        </form>

        <br>
        <form action="Calculomayormenorpromedio.php" method="post">
        <h3>Mayor, menor y promedio </h3>
            <p>Ingrese 3 números para calcular el mayor, el menor y su promedio</p>
            <input type="text" name="valor2">
            <input type="text" name="valor3">
            <input type="text" name="valor4">
            <input type="submit" name="calcular2" value="calcular">
        </form>

        <br>
        <br>
        <br>

        <form action="index.php" method="post">
            <input type="submit" value="Menú principal">
        </form>
    </body>
</html>