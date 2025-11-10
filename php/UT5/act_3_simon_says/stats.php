<?php
    function printStats() {
        $un = 'root';
        $db = 'bdsimon';
        $hn = 'localhost';
        $pw = '';

        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die('Fatal error');

        $queryUsers = "SELECT * FROM usuarios";
        $queryMatches = "SELECT * FROM jugadas";

        $result = $conn->query($queryUsers);
        

        echo "<div style='display: flex; flex-direction: row; gap: 10px'>";
        while($row = $result->fetch_assoc()) {
            echo "<p>";
            foreach ($row as $key => $value) {
                echo $key.': '.$value;
                echo "<br/>";
            }
            echo "</p>";
        }
        echo "</div>";
        
        echo '<br/>';

        $result = $conn->query($queryMatches);
        echo "<div style='display: flex; flex-direction: row; gap: 10px'>";
        while($row = $result->fetch_assoc()) {
            echo "<p>";
            foreach ($row as $key => $value) {
                echo $key.': '.$value;
                echo "<br/>";
            }
            echo "</p>";
        }
        echo "</div>";

        echo <<<_END
        <form action='start.php' method='get'>
            <input type='submit' value='Volver'/>
        </form>
        _END;
    }

    printStats();
?>