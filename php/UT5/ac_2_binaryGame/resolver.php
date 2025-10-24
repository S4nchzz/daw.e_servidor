<?php
    session_start();

    echo 'Numero: '.$_POST['toGuess'].'<br/>';
    echo 'Secret: '.$_SESSION['secret'].'<br/>';

    if ($_POST['toGuess'] == $_SESSION['secret']) {
        echo 'Has acertado';
    }
?>