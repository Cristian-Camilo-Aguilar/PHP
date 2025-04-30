<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor=rand(1,3);
    echo $valor;
    if ($valor==1)
    {
        echo "<br> Uno";
    }
    elseif ($valor==2)
    {
        echo "<br> Dos";
    }
    else
    {
        echo "<br> Tres";
    }
    ?>
</body>
</html>