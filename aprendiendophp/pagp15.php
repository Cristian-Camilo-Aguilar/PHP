<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ar=fopen("pedidos.txt","a") or
        die("Problemas en la Creacion");
    fputs(  $ar,"Nombre del Pedido: " .$_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs( $ar, "Direccion del Pedido: " .$_REQUEST['direccion']);
    fputs( $ar, "\n");
    if (isset($_REQUEST["check1"]))
    {
        fputs( $ar, "Jamon y Queso: " .$_REQUEST['cantidadjyq']);
        fputs( $ar, "\n");
    }    
    if (isset($_REQUEST["check2"]))
    {
        fputs( $ar, "Napolitana: ". $_REQUEST['cantidadnapo']);
        fputs( $ar, "\n");
    }
    if (isset($_REQUEST["check3"]))
    {
        fputs( $ar, "Muzarella: " .$_REQUEST['cantidadmuza']);
        fputs( $ar, "\n");
        
    }
    fputs( $ar, "--------------------------------------");
    fputs( $ar, "\n");
    fclose($ar);
    echo "El Pedido se cargo exitosamente";
    ?>
</body>
</html>