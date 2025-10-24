<?php
    echo <<<_END
    <html>
    <head>
        <title>Session1</title>
    </head/>
    <body>
        <form method='post' action='./session2.php'>
            <input type='text' name='name'/>
            <input type='submit' value='Jugar'/>
        </form>
    </body>
    </html>
    _END;
?>