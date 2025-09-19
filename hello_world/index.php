<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $HELLO = "Hello world <br/>";

        class Obj {
            function hello() {
                return "Hello from Obj <br/>";
            }
        }

        for ($i = 0; $i < 5; $i++) {
            echo "$HELLO <br/>";
            $obj = new Obj();
            echo $obj->hello();
        }
    ?>
</body>
</html>