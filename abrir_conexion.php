<?php
    $host = "localhost";
    $basededatos = "jugueteria";
    $usuariodb = "root";
    $clavedb = "";

    $tabla1 = "facturas";
    $tabla2 = "inven_juguete";
    $tabla3 = "inventarios";
    $tabla4 = "jugue_venta";
    $tabla5 = "juguete_proveedor";
    $tabla6 = "juguetes";
    $tabla7 = "proveedores";
    $tabla8 = "usuarios";
    $tabla9 = "ventas";
    $tabla10 = "inven_usua";

    error_reporting(0);

    $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

    if($conexion->conect_errno){
        echo "Nuestro sítio experimenta fallos...";
        exit();
    }
?>