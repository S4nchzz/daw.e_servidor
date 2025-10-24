<?php
    session_start();

    function generateForm() {
        if (!isset($_POST['player1'])) {
            echo '<h5>Players not found</h5>';
            return;
        }

        $_SESSION['name'];

        echo "Buenos dias ".$_SESSION['name'].' los jugadores que has elegido son '.$_POST['player1'].' | '.$_POST['player2'].' | '.$_POST['player3'];
    }
    
    generateForm();
    session_destroy()
?>