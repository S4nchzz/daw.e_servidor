<?php
  function ej1a() {
    $cars = array(
        "coches" => array(32, 11, 45, 22, 78, -3, 9, 66, 5)
    );
    echo $cars["coches"][5];
  }

//   ej1a();
  
  function ej1b() {
    $importe = array(
        "importe" => array(32.583, 11.239, 45.781, 22.237)
    );
    
    echo $importe["importe"][1];
    echo "<br/>";
    echo $importe["importe"][3];
  }

//   ej1b();

  function ej1c() {
    $confirmado = array(
        "confirmado" => array(true, true, false, true, false, false)
    );

    echo $confirmado["confirmado"][0] ? "true" : "false";
  }

//   ej1c();

  function ej1d() {
    $jugador = array(
        "jugador" => array("Crovic", "Antic", "Malic", "Zulic", "Rostrich")
    );

    $stringPlayers = array_map('strval', $jugador);
    echo 'La alineacion del equipo esta compuesta por'.$stringPlayers;
  }

  function ej2() {
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

  ej2();
?>