<?php
    function conditionals() {
        $n1 = 2;
        $n2 = 2;

        if ($n1 > $n2) {
            return $n1 - $n2;
        } else if ($n1 < $n2) {
            return $n1 + $n2;
        } else {
            return $n1 * $n2;
        }
    }

    echo conditionals()
?>