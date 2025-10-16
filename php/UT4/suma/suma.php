
<?php
    function getOperation() {
        if (!isset($_POST['n1']) || !isset($_POST['n2'])) {
            echo <<<_END
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <title>Formulario de Datos Básicos</title>
                </head>
                <body>
                    <h1>Formulario de Datos Personales</h1>
                    <form action="./suma.php" method="post">
                        <label for="n1">n1:</label><br>
                        <input type="text" id="n1" name="n1" required><br><br>

                        <label for="n2">n2:</label><br>
                        <input type="text" id="n2" name="n2" required><br><br>

                        <label for="operacion">operacion:</label><br>
                        <select id="operacion" name="operacion">
                        <option value="suma">+</option>
                        <option value="resta">-</option>
                        <option value="multiplicacion">*</option>
                        <option value="division">/</option>
                        </select>

                        <input type="submit" value="Enviar">
                    </form>
                </body>
            </html>
            _END;
            return;
        }

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        

        switch($_POST["operacion"]) {
            case 'suma':
                return $n1 + $n2;
            case 'resta':
                return $n1 - $n2;
            case 'multiplicacion':
                return $n1 * $n2;
            case 'division':
                return $n1 / $n2;
        }
    }

    echo getOperation()
?>