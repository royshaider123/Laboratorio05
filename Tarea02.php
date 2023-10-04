<?php
    $pre_act = $_POST['pre_act'];
    $cantid = $_POST['cantid'];

    $nuevo_precio = $pre_act - (0.05 * $pre_act);
    $importe_compra = $nuevo_precio * $cantid;
    $importe_descuento = 0.07 * $importe_compra;
    $importe_pagar = $importe_compra - $importe_descuento;
    $obsequio = 2 * $cantid;

    echo "El Nuevo Precio a Pagar es: ".$nuevo_precio."<br>"; 
    echo "El Importe de la Compra es: ".$importe_compra."<br>"; 
    echo "El Importe del Descuento es: ".$importe_descuento."<br>"; 
    echo "El Importe a Pagar es: ".$importe_pagar."<br>"; 
    echo "Cantidad de Obsequios es: ".$obsequio; 
?>