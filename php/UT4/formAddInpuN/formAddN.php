<?php
    if (!isset($POST_['nInputs'])) {
        echo <<<_END
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form method='POST' action='../formBucle/formBucle.php'>
            _END;

                // Generate input fields
                for ($i = 0; $i <= $_POST['nInputs'] - 1; $i++) {
                    echo "<input type='text' placeholder='Input: $i' name='n$i'/><br/>";
                }

                echo <<<_END
                    <input type='submit' value='Enviar'/>
                </form>
            </body>
            </html>
            _END;
    }
?>