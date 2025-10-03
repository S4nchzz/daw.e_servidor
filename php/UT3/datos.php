<?php
    function getOperation() {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        switch($_POST["operacion"]) {
            case 'suma':
                return $n1 + $n2;
            case 'resta':
                return $n1 - $n2;
            case 'multiplicacion':
                return $n1 * $n2;
            case 'division':
                return $n1 / $n2;
        }
    }

    echo getOperation();
?>