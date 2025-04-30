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
    if ($_REQUEST['edad']>=18)
    {
        echo "<br> Es mayor de Edad";
    }
    else
    {
        echo "<br> Es menor de Edad";
    }
    ?>
</body>
</html>