<?php
    session_start();

    function printForm() {
        echo <<<_END
            <html>
                <head>
                    <title>Login</title>
                </head>
                <body>
                    <form action="login.php" method="post">
                        <input type="text" placeholder="Usuario" name="user"/>
                        <input type="text" placeholder="Contraseña" name="pass"/>
                        <input type="submit" value="Entrar"/>
                    </form>

                    <form action="register.php" method="get">
                        <input type="submit" value="Registrarse"/>
                    </form>
                <body/>
            </html>
            _END;
    }

    function recharge() {   
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $un = 'root';
            $db = 'bdsimon';
            $hn = 'localhost';
            $pw = '';

            $conn = new mysqli($hn, $un, $pw, $db);
            if ($conn->connect_error) die('Fatal error');

            $query = "SELECT * FROM usuarios WHERE nombre = '$user' AND clave = '$pass'";
            $result = $conn->query($query);
            if (!$result) echo 'Usuario no encontrado';

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['userID'] = $row['Codigo'];
                header("Location: start.php");
                exit();
            }

            printForm();
            echo "No se ha encontrado el usuario";
            return;
        }
        
        printForm();
    }

    recharge();
?>