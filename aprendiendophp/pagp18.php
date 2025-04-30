<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function validarContrasena ($contrasena,$confirmacion)
    {
        if ($contrasena == $confirmacion){
            echo "Las Contraseñas son Identicas";
        }
        else{
            echo "Las Contraseñas NO son Identicas";
        }
    }   
    $contrasena=$_REQUEST['contrasena'];
    $confirmacion=$_REQUEST['confirmacion'];
    validarContrasena($contrasena,$confirmacion);
    ?>
</body>
</html>