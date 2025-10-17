<?php
    if (!isset($_POST['n0'])) {
        echo <<<_END
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form method='POST' action='formBucle.php'>
            _END;

                // Generate input fields
                for ($i = 0; $i <= 10; $i++) {
                    echo "<input type='text' placeholder='Input: $i' name='n$i'/><br/>";
                }

                echo <<<_END
                    <input type='submit' value='Enviar'/>
                </form>
            </body>
            </html>
            _END;
    } else {
        $allN = $_POST;
        foreach ($allN as $key => $value) {
            echo "El numero $key es $value <br/>";
        }
    }
?>