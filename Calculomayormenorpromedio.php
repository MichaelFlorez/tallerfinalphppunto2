<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo mayor, menor y promedio</title>
</head>
<body>
    <?php
    if($_POST["valor2"]>=$_POST["valor3"] && $_POST["valor2"]>=$_POST["valor4"]){
        $valor=$_POST["valor2"];
        echo "El número mayor es el: ".$valor;       
    }else if($_POST["valor3"]>=$_POST["valor2"] && $_POST["valor3"]>=$_POST["valor4"]){
        $valor=$_POST["valor3"];
        echo "El número mayor es el: ".$valor;
    }else if($_POST["valor4"]>=$_POST["valor2"] && $_POST["valor4"]>=$_POST["valor3"]){
        $valor=$_POST["valor4"];
        echo "El número mayor es el: ".$valor;
    }
    echo "<br>";

    if($_POST["valor2"]<=$_POST["valor3"] && $_POST["valor2"]<=$_POST["valor4"]){
        $menor=$_POST["valor2"];
        echo "El número menor es el: ".$menor;       
    }else if($_POST["valor3"]<=$_POST["valor2"] && $_POST["valor3"]<=$_POST["valor4"]){
        $menor=$_POST["valor3"];
        echo "El número menor es el: ".$menor;
    }else if($_POST["valor4"]<=$_POST["valor2"] && $_POST["valor4"]<=$_POST["valor3"]){
        $menor=$_POST["valor4"];
        echo "El número menor es el: ".$menor;
    }

    echo "<br>";

    $promedio=($_POST["valor2"]+$_POST["valor3"]+$_POST["valor4"])/3;
    echo "El promedio es: ".$promedio;

    echo "<br>"   
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