<?php
    $valor_redondear = 50.525;

    $to_odd = round($valor_redondear, 2, PHP_ROUND_HALF_ODD);
    $to_even = round($valor_redondear, 2, PHP_ROUND_HALF_EVEN);
    $to_up = round($valor_redondear, 2, PHP_ROUND_HALF_UP);

    echo "Redondeo a impar: $to_odd </br>";
    echo "Redondeo a par: $to_even </br>";
    echo "Redondeo al alto: $to_up </br>";
?>