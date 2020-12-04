<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculofibonacci</title>
</head>
<body>
    <?php
        if(isset($_POST["ir"])){

            require_once 'Operacionfibonacci.php';

            $fibonacci= new fibonacci(); 

            $numero=$_POST["valor"];

            $fibonacci->setValor($numero);
            
            $fibonacci->calcularFibonacciPara();
        }    
    ?>
    <br>
    <br>
    <br>
    <form action="index.php" method="post">
        <input type="submit" value="Menú principal">
    </form>   
    
    
</body>
</html>