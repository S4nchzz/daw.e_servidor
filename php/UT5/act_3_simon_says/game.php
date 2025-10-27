<?php
    session_start();

    $end = false;
    function printCircles() {
        if (!isset($_SESSION['tries'])) {
            $_SESSION['tries'] = [];
        }

        if (isset($_POST['solveColor'])) array_push($_SESSION['tries'], $_POST['solveColor']);

        var_dump($_SESSION['tries']);
        var_dump($_SESSION['colors']);

        $colors = $_SESSION['colors'];

        global $end;
        echo "<div style='display: flex; gap: 10px'>";        
        foreach ($colors as $key => $value) {
            if (isset($_SESSION['tries'][$key]) && $_SESSION['tries'][$key] == $value) {
                echo "<div style='background-color: $value; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
            } else if (!isset($_SESSION['tries'][$key])){
                echo "<div style='background-color: black; width: 100px; height: 100px; border-radius: 50%; border: 1px solid black;'></div>";
            } else {
                $end = true;
                echo "Fallaste, el siguiente color era $value";
            }
        }
        echo "</div>";
    }

    printCircles();

    function solve() {
        global $end;
        if ($end) {
            echo "<h2>El juego ha terminado</h2>";
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

    solve()
?>