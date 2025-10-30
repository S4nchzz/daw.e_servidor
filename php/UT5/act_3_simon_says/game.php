<?php
    session_start();

    $end = false;
    function printCircles() {
        if (!isset($_SESSION['tries'])) {
            $_SESSION['tries'] = [];
        }

        if (isset($_POST['solveColor'])) array_push($_SESSION['tries'], $_POST['solveColor']);
        $colors = $_SESSION['colors'];

        global $end;
        echo "<div style='display: flex; gap: 10px'>";
        foreach ($colors as $key => $value) {
            if (isset($_SESSION['tries'][$key]) && $_SESSION['tries'][$key] == $value) {
                echo "<div style='background-color: $value; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
            } else if (!isset($_SESSION['tries'][$key])){
                echo "<div style='background-color: black; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
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

    function solve() {
        global $end;

        if ($end) {
            echo "<h1>Fallaste, la combinacion correcta era: </h1>";
            printCorrectPattern();
            return;
        }

        echo "
            <br/>
            <br/>
            <form action='game.php' method='post'>
                <input type='submit' name='solveColor' value='red'/>
                <input type='submit' name='solveColor' value='blue'/>
                <input type='submit' name='solveColor' value='yellow'/>
                <input type='submit' name='solveColor' value='green'/>
            </form>
        ";
    }

    if (!$end) {
        printCircles();
    }

    solve()
?>