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
    if ($_REQUEST['radio1'] == "notiene")
    {
        echo "<br> No tiene Estudios";
    }
    elseif ($_REQUEST['radio1'] == "primarios")
    {
        echo "<br> Estudios Primarios";
    }
    else 
    {
        echo "<br> Estudios Secundarios";
    }
    ?>
</body>
</html>