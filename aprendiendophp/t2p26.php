<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="pagp26.php">
    Ingrese su Nombre:
    <br><br><input type="text" name="nombre"><br><br>
    Ingrese su Email:
    <br><br><input type="text" name="mail"><br><br>
    Seleccione su Curso:
    <br>
    <?php
    $conexion=mysqli_connect("localhost", "root","", "base1") or 
        die("Problemas con la conexion".mysqli_error($conexion));
    $registros=mysqli_query($conexion, "select codigo, nombrecurso from cursos") or 
        die("Problemas en el select".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros))
    {
        echo "<input type=radio name='codigocurso' value=\"$reg[codigo]\">$reg[nombrecurso]<br>";
    }
    ?>
    <br>
    <input type="submit" value="Registrar">
    </form>
</body>
</html>