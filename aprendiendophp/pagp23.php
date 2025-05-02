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
    $registros=mysqli_query($conexion, "select * from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or 
        die("Problemas en el select".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros))
    {
        mysqli_query($conexion,"delete from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or
            die("Problemas en el select:".mysqli_error($conexion));
        echo "Se realizo la Eliminacion del Curso";
    }
    else
    {
        echo "No existe ese Curso";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>