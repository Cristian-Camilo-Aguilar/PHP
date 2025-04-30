<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_REQUEST['nombre'];
    echo " <br> Tu Practicas estos Deportes: ";
    $cantidad=0;
    if (isset($_REQUEST['check1']))
    {
        echo "<br> Futbol";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check2']))
    {
        echo "<br> Basket";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check3']))
    {
        echo "<br> Tennis";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check4']))
    {
        echo "<br> Voley";
        $cantidad+=1;
    }
    ?>
</body>
</html>