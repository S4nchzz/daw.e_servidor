<?php
    session_start();

    function generateForm() {
        if (!isset($_POST['name'])) {
            echo '<h5>Name input value not found</h5>';
            return;
        }
        
        $_SESSION['name'] = $_POST['name'];

        echo <<<_END
        <html>
        <head>
            <title>Session2</title>
        </head/>
        <body>
            <form method='post' action='./session3.php'>
                <input type='text' name='player1'/>
                <input type='text' name='player2'/>
                <input type='text' name='player3'/>
                <input type='submit' value='Ver'/>
            </form>
        </body>
        </html>
        _END;
    }

    generateForm()
?>