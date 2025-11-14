<?php
    function printRegister() {
        echo <<<_END
            <html>
                <head>
                    <title>Login</title>
                </head>
                <body>
                    <h1>Registro</h1>
                    <form action="register.php" method="post">
                        <input type="text" placeholder="Usuario" name="user"/>
                        <input type="text" placeholder="Contraseña" name="pass"/>
                        <input type="submit" value="Registrarse"/>
                    </form>
                <body/>
            </html>
            _END;
    }

    function register() {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $un = 'root';
        $db = 'bdsimon';
        $hn = 'localhost';
        $pw = '';

        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die('Fatal error');

        $prepare = $conn->prepare('INSERT INTO usuarios (nombre, clave) VALUES (?, ?)');
        $prepare->bind_param('ss', $user, $pass);
        
        $prepare->execute();

        if ($prepare->affected_rows > 0) {
            echo "Usuario registrado";
        } else {
            echo "Ha ocurrido un problema al registrar el usuario.";
        }

        echo "<br/>";
        echo "<form action='login.php' method='get'>";
        echo "<input type='submit' value='Iniciar sesion'/>'";
        echo "</form>";
    }

    if (!isset($_POST['user'])) {
        printRegister();
    } else {
        register();
    }
?>