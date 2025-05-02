<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost", "root","", "base1") or 
        die("Problemas con la conexion");
    $registros=mysqli_query($conexion, "select nombrecurso from cursos") or
        die("Problemas con la conexion");
    while ($reg=mysqli_fetch_array( $registros ))
    {
        echo "<br>".$reg['nombrecurso'];
    }
    $registros=mysqli_query($conexion, "select count(*) as cantidad_cursos from cursos") or
        die("Problemas con la conexion");
    $reg=mysqli_fetch_array( $registros );
    echo "<br> La cantidad de Cursos son: ".$reg['cantidad_cursos'];
    
    ?>
</body>
</html>