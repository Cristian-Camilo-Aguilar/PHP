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
    $registros=mysqli_query($conexion,"select alu.codigo as codigoalumno, nombre, mail, codigocurso, nombrecurso from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso where alu.codigo='$_REQUEST[codigoalumno]'") or
        die("Problemas en el select".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros))
    {
        echo "Codigo:".$reg['codigoalumno']."<br>";
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Email:".$reg['mail']."<br>";
        echo "Curso:".$reg['nombrecurso']."<br>";
        echo "<hr>";
    }
    else
    {
        echo "No existe el Codigo del Alumno ingresado";
    }
    
    mysqli_close($conexion);
    ?>
</body>
</html>