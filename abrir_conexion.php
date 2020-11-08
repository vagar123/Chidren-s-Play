<?php
    $host = "localhost";
    $basededatos = "jugueteria";
    $usuariodb = "root";
    $clavedb = "";

    $tabla1 = "administrador";
    $tabla2 = "categoriajuguete";
    $tabla3 = "cliente";
    $tabla4 = "facturas";
    $tabla5 = "inven_juguete";
    $tabla6 = "inventarios";
    $tabla7 = "jugue_venta";
    $tabla8 = "juguete_proveedor";
    $tabla9 = "juguetes";
    $tabla10 = "proveedores";
    $tabla11 = "usuarios";
    $tabla12 = "ventas";

    error_reporting(0);

    $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

    if($conexion->conect_errno){
        echo "Nuestro sítio experimenta fallos...";
        exit();
    }
?>