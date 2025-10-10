<?php

function ejercicio1a() {
    $cars = array(
        "coches" => array(32, 11, 45, 22, 78, -3, 9, 66, 5)
    );
    echo $cars["coches"][5];
}

echo "<h2>Ejercicio 1A</h2>";
echo "<p>Declara un array de enteros con los valores 32, 11, 45, 22, 78, -3, 9, 66 y 5. Muestra el elemento con índice 5 (debería mostrar -3).</p>";
ejercicio1a();
echo "<br/><hr/>";

function ejercicio1b() {
    $importe = array(
        "importe" => array(32.583, 11.239, 45.781, 22.237)
    );
    
    echo $importe["importe"][1];
    echo "<br/>";
    echo $importe["importe"][3];
}

echo "<h2>Ejercicio 1B</h2>";
echo "<p>Declara un array de números decimales y muestra los elementos con índice 1 y 3.</p>";
ejercicio1b();
echo "<br/><hr/>";

function ejercicio1c() {
    $confirmado = array(
        "confirmado" => array(true, true, false, true, false, false)
    );

    echo $confirmado["confirmado"][0] ? "true" : "false";
}

echo "<h2>Ejercicio 1C</h2>";
echo "<p>Declara un array de booleanos y muestra el elemento con índice 0 (debería mostrar 'true').</p>";
echo "<br/>";
ejercicio1c();
echo "<br/><hr/>";

// function ejercicio1d() {
//     $jugador = array(
//         "jugador" => array("Crovic", "Antic", "Malic", "Zulic", "Rostrich")
//     );

//     $stringPlayers = array_map('strval', $jugador);
//     echo 'La alineacion del equipo esta compuesta por'.$stringPlayers;
// }

// echo "<h2>Ejercicio 1D</h2>";
// echo "<p>Declara un array de nombres de jugadores y muestra la frase: 'La alineación del equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.'</p>";
// ejercicio1d();
// echo "<br/><hr/>";

function ejercicio2() {
    $matrix = array(
      "basico" => array(1, 14, 8, 3),
      "medio" => array(6, 19, 7, 2),
      "perfeccionamiento" => array(3, 13, 4, 1)
    );

    $types = array("basico", "medio", "perfeccionamiento");
    
    $ingles = 0;
    $typeIteration = 0;
    for ($i = 0; $i < count($matrix); $i++) {
      if ($i == count($matrix)) {
        $typeIteration++;
        $i = 0;
      }

      $ingles += $matrix[$types[$i]][$typeIteration];
      echo $matrix[$types[$i]][$typeIteration]."<br/>";
    }

    echo $ingles;
}

echo "<h2>Ejercicio 2</h2>";
echo "<p>Crea una matriz con el número de alumnos por nivel (básico, medio, perfeccionamiento) y por idioma (inglés, francés, alemán, ruso). Muestra los valores por pantalla.</p>";
ejercicio2();
echo "<br/><hr/>";

function ejercicio3() {
    $even = array();

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            array_push($even, $i);
        }
    };

    foreach ($even as $key => $value) {
        echo $value." ";
    }
}

echo "<h2>Ejercicio 3</h2>";
echo "<p>Almacena los 10 primeros números pares en un array y muéstralos en pantalla.</p>";
ejercicio3();
echo "<br/><hr/>";

function ejercicio4() {
    $matrix = array(
        array(),
        array(),
        array(),
        array()
    );

    foreach($matrix as $key => $value) {
        for ($i = 0; $i < 4; $i++) {
            array_push($matrix[$key], rand(1, 9));
        }
    }

    //2 for each para imprimir por separado ya que junto se veria mal, menos rendimiento pero mas legible.
    foreach ($matrix as $keyOut => $value) {
        foreach ($value as $keyIn => $value) {
            echo ($keyOut == $keyIn) ? "<strong>$value</strong> " : $value.' ';
        }

        echo '<br/>';
    }

    echo '<br/>';

    foreach ($matrix as $keyOut => $value) {
        foreach ($value as $keyIn => $value) {
            echo ($keyOut == count($matrix) - 1 - $keyIn ) ? "<strong>$value</strong> " : $value.' ';
        }

        echo '<br/>';
    }

}
echo "<h2>Ejercicio 4</h2>";
echo "<p>Genera una matriz 4x4 con números aleatorios y muestra los elementos de la diagonal principal y secundaria.</p>";
ejercicio4();
echo "<br/><hr/>";

function ejercicio5() {
    $nRow = 3;
    $nCol = 5;
    $matrix = array(
        array(),
        array(),
        array(),
    );

    foreach ($matrix as $keyRow => $row) {
        for ($i = 0; $i < $nCol; $i++) {
            array_push($matrix[$keyRow], rand(11, 99));
        }
    }

    echo 'Row: <br/><br/>';
    foreach ($matrix as $kr => $col) {
        foreach ($col as $kc => $item) {
            echo $item.' ';
        }

        echo '<br/>';
    }

    echo '<br/>';

    echo 'Col: <br/><br/>';
    for ($r = 0; $r < $nCol; $r++) {
        for ($c = 0; $c < $nRow; $c++) {
            echo $matrix[$c][$r].' ';
        }

        echo '<br/>';
    }
}
echo "<h2>Ejercicio 5</h2>";
echo "<p>Genera una matriz 3x5 con valores aleatorios y muestra los elementos por fila y luego por columna.</p>";
ejercicio5();
echo "<br/><hr/>";

function ejercicio6() {
    $nRow = 4;
    $nCol = 5;
    $matrix = array(
        array(),
        array(),
        array(),
        array()
    );

    foreach ($matrix as $keyRow => $row) {
        for ($i = 0; $i < $nCol; $i++) {
            array_push($matrix[$keyRow], rand(11, 99));
        }
    }

    echo 'Row: <br/><br/>';
    foreach ($matrix as $keyRow => $row) {
        foreach ($row as $keyCol => $col) {
            echo $col.' ';
        }

        echo '<br/>';
    }
    
    echo '<br/>';
    
    $bigger = 0;
    $bigRow = 0;
    $bigCol = 0;
    foreach ($matrix as $kr => $row) {
        foreach ($row as $kc => $value) {
            if ($value > $bigger) {
                $bigger = $value;
                $bigRow = $kr;
                $bigCol = $kc;
            }
        }
    }

    echo 'El numero mas grande es: '.$bigger.' | Row: '.$bigRow.' | Col:'.$bigCol;

}
echo "<h2>Ejercicio 6</h2>";
echo "<p>Genera una matriz 4x5 con valores aleatorios y determina la fila y columna del elemento mayor.</p>";
ejercicio6();
echo "<br/><hr/>";

function ejercicio7() {
    $nRow = 3;
    $nCol = 4;
    $matrix = array(
        array(),
        array(),
        array()
    );

    foreach ($matrix as $keyRow => $row) {
        for ($i = 0; $i < $nCol; $i++) {
            array_push($matrix[$keyRow], rand(11, 99));
        }
    }

    $big = 0;
    $lastBig = $big;

    foreach ($matrix as $keyRow => $row) {
        foreach ($row as $keyCol => $col) {
            if ($col > $big) {
                $lastBig = $big;
                $big = $col;
            }

            echo $col.' ';
        }

        echo '<br/>';
        echo 'Mayor: '.$big.' | Mayor anterior: '.$lastBig;
        echo '<br/>';
        echo 'Promedio: '.(($big + $lastBig) / 2);
        echo '<br/><br/>';

        $big = 0;
        $lastBig = 0;
    }
}
echo "<h2>Ejercicio 7</h2>";
echo "<p>Genera una matriz 3x4 y crea dos vectores: uno con los valores máximos de cada fila y otro con los promedios. Muéstralos por pantalla.</p>";
ejercicio7();
echo "<br/><hr/>";

function ejercicio8() {
    $nRow = 10;
    $nCol = 10;
    $matrix = array();

    for($i = 0; $i < $nRow; $i++) {
        $arr = array();
        for($k = 0; $k < $nCol; $k++) {
            array_push($arr, rand(11, 99));
        }

        array_push($matrix, $arr);
    }

    $bigger = 0;
    $bigRow = 0;
    $bigCol = 0;
    foreach ($matrix as $kr => $row) {
        foreach ($row as $kc => $col) {
            if ($col > $bigger) {
                $bigRow = $kr;
                $bigCol = $kc;
                $bigger = $col;
            }
            echo $matrix[$kr][$kc].' ';
        }
        echo '<br/>';
    }

    echo '<br/>N Mayor: '.$bigger.' | Row: '.$bigRow.' | Col: '.$bigCol;
}
echo "<h2>Ejercicio 8</h2>";
echo "<p>Llena una matriz 10x10 con valores aleatorios y muestra la posición (fila, columna) del número mayor.</p>";
ejercicio8();
echo "<br/><hr/>";

function ejercicio9() {
    $nRow = 5;
    $nCol = 5;
    $matrix = array();

    for($i = 0; $i < $nRow; $i++) {
        $arr = array();
        for($k = 0; $k < $nCol; $k++) {
            array_push($arr, rand(11, 99));
        }

        array_push($matrix, $arr);
    }

    $sumArr = array();
    foreach ($matrix as $kr => $row) {
        $sum = 0;
        foreach ($row as $kc => $col) {
            echo $matrix[$kc][$kr].' ';
            $sum += $col;
        }

        array_push($sumArr, $sum);
        echo '<br/>';
    }
    
    echo '<br/>Columnas sumadas: ';
    foreach ($sumArr as $key => $sumItem) {
        echo $key.' = '.$sumItem.' | ';
    }
    echo '<br/>';

    echo 'Mayor: '.max($sumArr);
}
echo "<h2>Ejercicio 9</h2>";
echo "<p>Llena una matriz 20x20 con valores aleatorios. Suma las columnas e imprime la que tenga la máxima suma y su valor.</p>";
ejercicio9();
echo "<br/><hr/>";

function ejercicio10() {
    $v = array(
        1 => 90,
        30 => 7,
        'e' => 99,
        'hola' => 43
    );

    foreach ($v as $key => $value) {
        echo $key.': '.$value.' <br/>';
    }
}
echo "<h2>Ejercicio 10</h2>";
echo "<p>Carga un array asociativo con los valores dados y muestra su contenido usando foreach.</p>";
ejercicio10();
echo "<br/><hr/>";

function ejercicio11() {
    $monthMovies = array(
        "Enero" => array("Oppenheimer", "Wonka", "La sociedad de la nieve"), 
        "Febrero" => array("Dune: Parte Dos", "Madame Web", "Bob Marley: One Love"), 
        "Marzo" => array(), 
        "Abril" => array("Civil War", "Challengers", "Monkey Man")
    );

    foreach($monthMovies as $key => $month) {
        if (!empty($month)) {
            echo $key.': <br/>';
            foreach ($month as $movieKey => $movie) {
                echo $movie.'<br/>';
            }

            echo '<br/>';
        }
    }
}
echo "<h2>Ejercicio 11</h2>";
echo "<p>Crea un array con las películas vistas por mes (enero a abril). Muestra solo los meses con películas vistas.</p>";
ejercicio11();
echo "<br/><hr/>";

function ejercicio12() {
    $person = array(
        "Name" => "Iyan",
        "Surname" => "Sanchez",
        "Address" => "Aviles",
        "Phone" => "666"
    );

    foreach ($person as $key => $p) {
        echo $key.': '.$p.' <br/>';
    }
}
echo "<h2>Ejercicio 12</h2>";
echo "<p>Crea un array asociativo con los datos de una persona (nombre, dirección y teléfono) y muéstralos.</p>";
ejercicio12();
echo "<br/><hr/>";

function ejercicio13() {
    $cities = array("Aviles", "Gijon", "Oviedo", "Nueva york");

    foreach ($cities as $key => $city) {
        echo 'La ciudad '.$city.' esta en la posicion '.$key.'<br/>';
    }
}
echo "<h2>Ejercicio 13</h2>";
echo "<p>Crea un array con ciudades y muestra cada una indicando su índice.</p>";
ejercicio13();
echo "<br/><hr/>";

function ejercicio14() {
    $cities = array("AVS" => "Aviles", "GJN" => "Gijon", "OVD" => "Oviedo", "NY" => "Nueva york", "MD" => "Madrid");

    foreach ($cities as $key => $city) {
        echo 'La ciudad '.$city.' con abreviatura '.$key.'<br/>';
    }
}
echo "<h2>Ejercicio 14</h2>";
echo "<p>Repite el ejercicio anterior pero usando índices asociativos (por ejemplo, 'MD' para Madrid).</p>";
ejercicio14();
echo "<br/><hr/>";

function ejercicio15() {
    $names = array("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");

    echo 'N elementos: '.count($names);
    echo '<ul>';
    foreach ($names as $key => $name) {
        echo '<li>';
        echo $name;
        echo '</li>';
    }
    echo '</ul>';
}
echo "<h2>Ejercicio 15</h2>";
echo "<p>Crea un array con nombres y muestra el número de elementos y cada uno en una lista no numerada HTML.</p>";
ejercicio15();
echo "<br/><hr/>";

function ejercicio16() {
    $lenguajes_cliente = array("JAVASCRIPT", "TYPESCRIPT");
    $lenguajes_servidor = array("Java", "PHP", "ASP");

    $mix = array();
    
    foreach ($lenguajes_cliente as $key => $lang) {
        array_push($mix, $lang);
    }
    
    foreach ($lenguajes_servidor as $key => $lang) {
        array_push($mix, $lang);
    }
    
    foreach ($mix as $key => $languajes) {
        echo $languajes.' | ';
    }
}
echo "<h2>Ejercicio 16</h2>";
echo "<p>Crea dos arrays de lenguajes (cliente y servidor), únelos en uno solo y muéstralos en una tabla.</p>";
ejercicio16();
echo "<br/><hr/>";

function ejercicio17() {
    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $array3 = array(7, 8, 9);

    $merged = array_merge($array1, $array2, $array3);

    foreach ($merged as $key => $item) {
        echo $item.' ';
    }
}
echo "<h2>Ejercicio 17</h2>";
echo "<p>Rellena tres arrays y únelos en uno nuevo usando array_merge(). Muéstralo por pantalla.</p>";
ejercicio17();
echo "<br/><hr/>";

function ejercicio18() {
    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $array3 = array(7, 8, 9);

    $merged = array();
    array_push($merged, $array1, $array2, $array3);

    foreach ($merged as $key => $arr) {
        foreach ($arr as $key => $item) {
            echo $item.' ';
        }
    }
}
echo "<h2>Ejercicio 18</h2>";
echo "<p>Realiza el ejercicio anterior pero usando array_push() en lugar de array_merge().</p>";
ejercicio18();
echo "<br/><hr/>";

function ejercicio19() {
    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $array3 = array(7, 8, 9);

    $merged = array();
    array_push($merged, $array1, $array2, $array3);
    rsort($merged);

    foreach ($merged as $key => $arr) {
        foreach ($arr as $key => $item) {
            echo $item.' ';
        }
    }
}
echo "<h2>Ejercicio 19</h2>";
echo "<p>Muestra el array del ejercicio anterior pero en orden inverso.</p>";
ejercicio19();
echo "<br/><hr/>";

function ejercicio20() {
    
}
echo "<h2>Ejercicio 20</h2>";
echo "<p>Implementa un array asociativo con equipos y estadios. Muéstralo en tabla, elimina el Real Madrid y vuelve a mostrarlo en lista numerada.</p>";
ejercicio20();
echo "<br/><hr/>";

function ejercicio21() {
    
}
echo "<h2>Ejercicio 21</h2>";
echo "<p>Implementa un array asociativo con números y ordénalo de menor a mayor. Muéstralo en una tabla.</p>";
ejercicio21();
echo "<br/><hr/>";

function ejercicio22() {
    
}
echo "<h2>Ejercicio 22</h2>";
echo "<p>Crea un array con los valores dados, cuenta los elementos, elimina uno y luego destruye el array. Muestra los cambios.</p>";
ejercicio22();
echo "<br/><hr/>";

function ejercicio23() {
    
}
echo "<h2>Ejercicio 23</h2>";
echo "<p>Crea un array multidimensional con las familias Simpson y Griffin, con padre, madre e hijos. Muéstralo en una lista.</p>";
ejercicio23();
echo "<br/><hr/>";

function ejercicio24() {
    
}
echo "<h2>Ejercicio 24</h2>";
echo "<p>Crea un array de deportes y recórrelo con un for. Muestra el total de elementos y el valor del puntero en distintas posiciones.</p>";
ejercicio24();
echo "<br/><hr/>";

function ejercicio25() {
    
}
echo "<h2>Ejercicio 25</h2>";
echo "<p>Crea una matriz para guardar a los amigos clasificados por diferentes ciudades.</p>";
ejercicio25();
echo "<br/><hr/>";

?>
