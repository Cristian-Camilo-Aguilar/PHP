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
    $registros=mysqli_query($conexion,"update alumnos set codigocurso='$_REQUEST[codigocurso]'") or 
        die("Problemas en el select:".mysqli_error($conexion));
    $registros=mysqli_query($conexion,"update alumnos set nombre='$_REQUEST[nombrenuevo]' where nombre='$_REQUEST[nombreviejo]'") or
        die("Problemas en el select:".mysqli_error($conexion));
    $registros=mysqli_query($conexion,"update alumnos set mail='$_REQUEST[mailnuevo]' where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:".mysqli_error($conexion));
    echo "Se Modifico correctamente";
    ?>
</body>
</html>