<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=rand(1,100);
    if ($num<=50)
    {
        echo "El numero $num es menor o igual a 50";
    }
    else 
    {
        echo "El numero $num es mayor a 50";
    }
    ?>
</body>
</html>