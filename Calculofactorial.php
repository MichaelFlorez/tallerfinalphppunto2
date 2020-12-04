<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo factorial</title>
</head>
<body>
    <?php

       function obtieneFactorial($numero){ 
          $factorial = 1; 
          for ($i = 1; $i <= $numero; $i++){ 
          $factorial = $factorial * $i; 
          } 
          return $factorial; 
        } 
        echo "El factorial de tu número es: ".obtieneFactorial($_POST["Valor1"]); 
    ?>
    <br>
    <br>
    <br>
       <form action="index.php" method="post">
           <input type="submit" value="Menú principal">
       </form>

       <form action="Calculosmatematicos.php" method="post">
           <input type="submit" value="Cálculos matemáticos">
       </form>
</body>
</html>