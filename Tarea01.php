<?php
    $num_hijos = $_POST['num_hijos'];
    $imp_ttl = $_POST['imp_ttl'];

    $bonificacion = 50 * $num_hijos;
    $comision = 0.075 * $imp_ttl;
    $sueldo_bruto = 600 + (0.075 * $imp_ttl) + $bonificacion;
    $descuento = 0.11 * $sueldo_bruto;
    $sueldo_neto = $sueldo_bruto - $descuento;

    echo "Su Bonificacion es: ".$bonificacion."<br>"; 
    echo "Su Comision es: ".$comision."<br>"; 
    echo "Su Sueldo Bruto es: ".$sueldo_bruto."<br>"; 
    echo "Su Descuento es: ".$descuento."<br>"; 
    echo "Su Sueldo Neto es: ".$sueldo_neto; 
?>