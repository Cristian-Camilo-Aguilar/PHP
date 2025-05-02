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
    mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')") or 
        die("Problemas en el select".mysqli_error($conexion));

    echo "El Alumno fue dado de Alta";
    mysqli_close($conexion)
    ?>
</body>
</html>