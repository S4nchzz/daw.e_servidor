<?php  
    echo <<<_END
        <html>
            <head>
                <title>Dificultad</title>
            </head>
            <body>
                <div style='display: flex; justify-content: center; flex-direction: column; align-items: center'>
                    <h1>Elige una dificultad para comenzar el juego.</h1>
                    <form action="simon_says.php" method="post">
                        <select name="diff">
                            <option value="4">4 circulos</option>
                            <option value="5">5 circulos</option>
                            <option value="6">6 circulos</option>
                            <option value="7">7 circulos</option>
                            <option value="8">8 circulos</option>
                        </select>
                        <input type='submit' value='Jugar'/>
                    </form>
                </div>
            </body>
        </html>
    _END;
?>