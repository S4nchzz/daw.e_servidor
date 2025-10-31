<?php
    session_start();
    if (isset($_SESSION['tries'])) $_SESSION['tries'] = [];

    $colorList = ['red', 'blue', 'yellow', 'green'];
    $colors = [];

    function generateColorList() {
        global $colorList;
        global $colors;
        for ($i = 0; $i < (int)$_POST['diff']; $i++) {
            array_push($colors, $colorList[rand(0, count($colorList) - 1)]);
        }
    }

    generateColorList();

    shuffle($colors);

    $_SESSION['colors'] = $colors;
    
    function printRandomCircles() {
        global $colors;

        echo <<<_END
        <html>
            <head>
                <title>Simon says</title>
            </head>
            <body>
                <div style='display: flex; justify-content: center; flex-direction: column; align-items: center'>
                    <h1>Bienvenido, memoriza esta combinación</h1>
        _END;

            echo "<div style='display: flex; gap: 10px'>";
            foreach ($colors as $key => $value) {
                echo "<div style='background-color: $value; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
            }
            echo "</div>";

            echo <<<_END
                    <br/>
                    <form action='game.php' method='post'>
                        <input type='submit' value='Jugar'/>
                    </form>
                </div>
            </body>
        </html>
        _END;
    }

    printRandomCircles()
?>