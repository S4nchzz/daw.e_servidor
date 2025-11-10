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
                        <select name="diffCir">
                            <option value="4">4 Circulos</option>
                            <option value="5">5 Circulos</option>
                            <option value="6">6 Circulos</option>
                            <option value="7">7 Circulos</option>
                            <option value="8">8 Circulos</option>
                        </select>
                        <select name="diffCol">
                            <option value="2">2 Colores</option>
                            <option value="3">3 Colores</option>
                            <option value="4">4 Colores</option>
                            <option value="5">5 Colores</option>
                            <option value="6">6 Colores</option>
                            <option value="7">7 Colores</option>
                            <option value="8">8 Colores</option>
                        </select>
                        <input type='submit' value='Jugar'/>
                    </form>
                    <form action="stats.php" method="get">
                        <input type="submit" value="Ver estadisticas"/>
                    </form>
                </div>
            </body>
        </html>
    _END;
?>