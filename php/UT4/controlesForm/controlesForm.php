<?php
    if (!isset($_POST['nombre'])) {
        echo <<<_END
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Form</title>
            </head>
            <body>
                <form method='POST' action='./controlesForm.php'>
                    <input type='text' name='nombre' placeholder="Nombre"/>
                    <input type='text' name='apellidos' placeholder="Apellidos"/>
                    <input type='number' name='edad' placeholder="Edad" max="110" min="1"/>
                    <select name='profesion'>
                        <option value='profesor'>Profesor</option>
                        <option value='informatico'>Informatico</option>
                        <option value='programador'>Programador</option>
                    </select>
                    <label>
                    <input type="radio" name="genero" value="hombre">
                        Hombre
                    </label>

                    <label>
                        <input type="radio" name="genero" value="mujer">
                        Mujer
                    </label>
                    <label><input type="checkbox" name="navegador1" value="chrome">Chrome</label>
                    <label><input type="checkbox" name="navegador2" value="safari">Safari</label>
                    <label><input type="checkbox" name="navegador3" value="edge">Edge</label>
                    <input type='submit' value='Enviar'/> 
                </form>
            </body>
            </html>
        _END;
    } else {
        var_dump($_POST);
        echo "Nombre: ".$_POST['nombre'].'<br/>';
        echo "Apellidos: ".$_POST['apellidos'].'<br/>';
        echo "Edad: ".$_POST['edad'].'<br/>';
        echo "Profesion: ".$_POST['profesion'].'<br/>';
        echo "Genero: ".$_POST['genero'].'<br/>';
        if (isset($_POST['navegador1'])) echo "Navegador1: ".$_POST['navegador1'].'<br/>';
        if (isset($_POST['navegador2'])) echo "Navegador1: ".$_POST['navegador2'].'<br/>';
        if (isset($_POST['navegador3'])) echo "Navegador1: ".$_POST['navegador3'].'<br/>';
    }
?>