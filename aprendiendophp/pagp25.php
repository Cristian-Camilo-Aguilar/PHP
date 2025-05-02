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
    $registros=mysqli_query($conexion, "select * from cursos where codigo='$_REQUEST[codigo]'") or 
        die("Problemas en el select".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros))
    {
        ?>
        <form method="post" action="pagp25_2.php">
        Ingrese el nuevo Nombre del Curso:
        <br><br><input type="text" name="cursonuevo" value="<?php echo $reg['codigo'] ?>"><br>
        <input type="hidden" name="cursoviejo" value="<?php echo $reg['codigo'] ?>"><br>
        <input type="submit" value="Modificar">
        </form>
        <?php
    }
    else
    {
        echo "No exite un Curso con este Codigo";
    }
    ?>
</body>
</html>