<?php
    session_start();

    $end = false;
    $colors = [];
    function printCircles() {
        if (!isset($_SESSION['tries'])) {
            $_SESSION['tries'] = [];
        }

        if (isset($_POST['solveColor'])) array_push($_SESSION['tries'], $_POST['solveColor']);
        global $colors;
        $colors = $_SESSION['colors'];
        
        global $end;
        if (isset($_SESSION['tries']) && count($_SESSION['tries']) == count($colors)) {
            $end = true;
        }

        var_dump($colors);
        echo "<div style='display: flex; gap: 10px; flex-wrap: wrap;'>";
        foreach ($colors as $key => $value) {
            if (isset($_SESSION['tries'][$key]) && $_SESSION['tries'][$key] == $value) {
                echo "<div style='background-color: $value; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
            } else if (!isset($_SESSION['tries'][$key])){
                echo "<div style='display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; font-weight: bold; font-family: Segoe UI; background-color: black; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black; text-size: 2rem; text-align: center;'><p>?</p></div>";
            } else {
                echo "<div style='background-color:".$_SESSION['tries'][$key]."; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
                $end = true;
            }
        }
        echo "</div>";
    }

    function printCorrectPattern() {
        echo "<div style='display: flex; gap: 10px'>";
        foreach ($_SESSION['colors'] as $color) {
            echo "<div style='background-color: ".$color."; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
        }
        echo "</div>";
    }

    function printReplay() {
        echo "
                <form action='difficulty.php' method='get'>
                    <input type='submit' value='Volver a jugar'/>
                </form>
            ";
    }

    function solve() {
        global $end;
        global $colors;

        if ($end && isset($_SESSION['tries']) && count($_SESSION['tries']) == count($colors)) {
            echo "<h1>Has ganado!</h1>";
            printCorrectPattern();
            printReplay();
            return;
        } else if ($end) {
            echo "<h1>Fallaste, la combinacion correcta era: </h1>";
            printCorrectPattern();
            printReplay();
            return;
        }

        global $colors;
        echo "<br/><br/>";
        
        echo "<form action='game.php' method='post' style='display: flex; gap: 10px;'>";
        foreach ($_SESSION['colorList'] as $color) {
            echo "<input style='background-color: $color; cursor: pointer; font-weight: bold; border: 0; padding: 10px 20px 10px 20px; border-radius: 10px;' type='submit' name='solveColor' value='$color'/>";
        }
        echo "</form>";

    }

    if (!$end) {
        printCircles();
    }

    solve()
?>