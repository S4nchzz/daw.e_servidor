<?php
    echo 'Sort: <br/><br/>';
    customSort(false);
    
    echo 'Rsort: <br/><br/>';
    customSort(true);
    
    function customSort($rsort) {
        $strings = array("1" , "333", "22", "55555", "4444", "88888888");
        $numbers = array(321, 92, 82, 12, 692, 2754, 192, 52);

        $rsort ? rsort($strings, SORT_STRING) : sort($strings, SORT_STRING);
        $rsort ? rsort($numbers) : sort($numbers);

        foreach ($strings as $key => $value) {
            echo $value.' ';
        };

        echo '<br/>';

        foreach ($numbers as $key => $value) {
            echo $value.' ';
        };
    };
    
    echo '<br/><br/>Explode: <br/><br/>';
    customExplode();
    function customExplode() {
        $explodedChar = str_split("This is a sentence with seven words.");
        $explodedWord = explode(' ', "This is a sentence with seven words.");

        foreach ($explodedChar as $key => $value) {
            echo $value;
        }
        
        echo '<br/> <br/>';

        foreach ($explodedWord as $key => $value) {
            echo $value;
        }
    }

    echo '<br/><br/>Find & count: <br/><br/>';
    findCount();
    function findCount() {
        $numbers = array(321, 92, 82, 12, 692, 2754, 192, 52);
        $element = array_find($numbers, function ($item) {
            return $item == 92;
        });
        echo $element;

        echo count($numbers);
    }
?>