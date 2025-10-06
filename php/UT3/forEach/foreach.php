<?php
    function firstEj() {
        $personas = array(
        $persona1 = array(
            'nombre' => 'Yolanda',
            'apellido1' => 'Iglesias',
            'apellido2' => 'Suarez'
        ),
        $persona2 = array(
            'nombre' => 'Juan',
            'apellido1' => 'Lopez',
            'apellido2' => 'Blanco'
        ),
    );

        foreach($personas as $persona) {
            foreach($persona as $valor => $item) {
                echo "$valor : $item";
                echo '</br>';
            }

            echo '</br>';
        }
    };

    $gente = array(
        array(
            'Familia' => 'Los simpsons',
            'Padre' => 'Hombre',
            'Madre' => 'Marge',
            'Hijos' => array('Bart', 'Lisa', 'Maggie')
        ),
        array(
            'Familia' => 'Los Griffni',
            'Padre' => 'Peter',
            'Madre' => 'Lois',
            'Hijos' => array('Chirs', 'Meg', 'Stewie')
        )
    );

    foreach($gente as $i => $familia) {
        echo "Familia$i";
        echo '<ul>';
            echo '<li>';
            echo 'Familia: '.$familia['Familia'];
            echo '</li>';

            echo '<li>';
            echo 'Padre: '.$familia['Padre'];
            echo '</li>';

            echo '<li>';
            echo 'Madre: '.$familia['Madre'];
            echo '</li>';

            echo '<li>';
            
            foreach($familia['Hijos'] as $hijo) {
                echo 'Hijos: '.$hijo.', ';
            }

            echo '</li>';

        echo '</ul>';
    }
?>