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
        die("Problemas con la conexion".mysqli_error($conexion));

    mysqli_query($conexion, "update cursos set nombrecurso='$_REQUEST[cursonuevo]' where nombrecurso='$_REQUEST[cursoviejo]'") or 
        die("Problemas con la conexion".mysqli_error($conexion));
    echo "El Nombre del Curso fue modificado con Exito";
    ?>
</body>
</html>