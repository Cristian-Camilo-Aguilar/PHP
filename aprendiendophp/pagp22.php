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
    $registros=mysqli_query($conexion, "select * from alumnos where nombre='$_REQUEST[nombre]'") or 
        die("Problemas en el select".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros))
    {
        echo "Nombre: ".$reg['nombre']."<br>";
        echo "Email: ".$reg['mail']."<br>";
        echo "Curso: ";
        switch ($reg['codigocurso'])
        {
            case 1:echo "PHP";
                break;
            case 2:echo "ASP";
                break;
            case 3:echo "JSP";
                break;
        }
    }
    else{
        echo "No existe un alumno con ese Nombre";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>