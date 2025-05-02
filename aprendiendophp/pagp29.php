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
    $registros=mysqli_query($conexion,"select * from alumnos where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select".mysqli_error($conexion));
    if ($regalu=mysqli_fetch_array($registros))
    {
        ?>
            <form method="post" action="pagp29_2.php">
                Ingrese su Nombre Nuevo:
                <br><br><input type="text" name="nombrenuevo" value="<?php echo $regalu['nombre']?>"> 
                <input type="hidden" name="nombreviejo" value="<?php echo $regalu['nombre']?>"><br><br>
                Ingrese su Email Nuevo:
                <br><br><input type="text" name="mailnuevo" value="<?php echo $regalu['mail']?>"><br><br>
                <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail']?>">
                Seleccione su Nuevo Curso:
                <br><br><select name="codigocurso">
                    <?php
                        $registros=mysqli_query($conexion,"select * from cursos") or
                            die("Problemas en el select");
                        while ($reg=mysqli_fetch_array($registros))
                        {
                            if ($regalu['codigocurso']==$reg['codigo'])
                            {
                                echo "<option value=\"$reg[codigo]\"selected>$reg[nombrecurso]</option>";
                            }
                            else
                            {
                                echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                            }
                        }
                    ?>
                </select>
                <br><br>
                <input type="submit" value="Modificar">
            </form>
        <?php
    }
    else{
        echo "No existe dicho Alumno con ese Codigo";
    }
    ?>
</body>
</html>