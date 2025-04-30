<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Tabla 2 Ciclo For";
    for($f=2;$f<=20;$f=$f+2)
    echo  "<br>  $f";

    echo "<br> Tabla 2 Ciclo While <br>";
    $numero=2;
    $limite=10;
    $contador=1;
    while ($contador<=$limite)
    {
        $resultado= $numero * $contador;
        echo "$resultado <br>";
        $contador++;
    }

    echo "<br> Tabla 2 Ciclo Do/While <br>";
    $numero1=1;
    do{
        $resultado= 2 * $numero1;
        echo "$resultado <br>";
        $numero1++;
    } while ($numero1<=10);
    ?>
</body>
</html>