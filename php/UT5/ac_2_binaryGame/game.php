<?php
    session_start();
    $BINARY = [];
    
    function getRandomCombination() {
        global $BINARY;
        $SECRET = 0;
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, 1);
            if ($n == 1) $SECRET = $SECRET + (pow(2, $i));
            array_push($BINARY, $n);
        }

        $_SESSION['secret'] = $SECRET;
    };

    function printCards() {
        echo <<<_END
        <html>
            <head>
                <title>GAME</title>
            </head>
            <body>
        _END;

        global $BINARY;
        getRandomCombination();
        echo "<div>";
            foreach ($BINARY as $key => $value) {
                echo "<span style='font-size: 50px'>$value </span>";
            }
        echo "</div>";

        echo <<<_END
            <div style='display: flex;'>
        _END;

        foreach ($BINARY as $key => $value) {
            if ($value == 1) {
                echo "<img style='border: 1px solid black' src='./img/card_$key.png'/>";
            } else {
                echo "<div style='width:170px; height:250px; background-color:grey; border: 1px solid black'></div>";
            }
        }

        echo <<<_END
                </div>
                <form method='post' action='./resolver.php'>
                    <label for='toGuess'>Adivina el numero: </label>
                        <input type='text' id='toGuess' name='toGuess'/>
                        <input type='submit' value='Enviar'/>
                    </label>
                </form>
            </body>
        </html>
        _END;
    }

    printCards()
?>