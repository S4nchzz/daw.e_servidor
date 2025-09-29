<?php
    function ej1() {
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

    function ej2() {
        $n1 = 1;
        $n2 = 2;
        $n3 = 3;

        if ($n1 > $n2 && $n1 > $n3) {
            return $n1;
        } else if ($n2 > $n1 && $n2 > $n3) {
            return $n2;
        } else if ($n3 > $n1 && $n3 > $n2) {
            return $n3;
        } else if ($n1 == $n2) {
            if ($n3 > $n1) {
                return $n3;
            } else {
                return $n1;
            }
        } else if ($n2 == $n3) {
            if ($n1 > $n3) {
                return $n1;
            } else {
                return $n3;
            }
        } else if ($n1 == $n3) {
            if ($n2 > $n1) {
                return $n2;
            } else {
                return $n3;
            }
        }
    }

    function ej4() {
        $n1 = rand(0, 5);
        $n2 = rand(0, 5);

        if ($n1 > $n2) {
            echo 'N1 Es mayor que N2';
        } else {
            echo 'N2 Es mayor que N1';
        }
    }

    function ej6() {
        for ($i = 0; $i <= 50; $i += 5) {
            echo $i;
        }
    }

    function ej10() {
        for ($i = 1; $i < 10; $i++) {
            for ($k = 1; $k < 10; $k++) {
                if ($k !== $i) {
                    echo "($i, $k)";
                } 
            }    
        }
    }

    function ej11() {
        $matrix = array(
            array(1, 2, 3, 4),
            array(5, 6, 7, 8),
            array(9, 10, 11, 12),
            array(13, 14, 15, 16)
        );

        $yTop = 0;
        $yBot = count($matrix) - 1;

        $dp = "";
        $ds = "";

        for ($i = 0; $i < count($matrix); $i++) {
            if ($yTop < count($matrix)) {
                $dp = $dp.$matrix[$i][$yTop]." ";
                $yTop++;
            }
            
            if ($yBot >= 0) {
                $ds = $ds.$matrix[$yBot][$i]." ";
                $yBot--;
            }
        }

        echo $dp;
        echo "<br/>";
        echo $ds;
    }
?>