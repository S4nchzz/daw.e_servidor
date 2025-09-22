<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $HELLO = "Hello world <br/>";

        class Obj {
            static function iAmStatic() {
                echo "Soy un metodo estatico";  
            }

            function hello() {
                return "Hello from Obj <br/>";
            }
        }
        
        $obj = new Obj();

        for ($i = 0; $i < 5; $i++) {
            echo "$HELLO <br/>";
            echo $obj->hello();
        }

        $arr = array("one", "two", "three");
        for ($i = 0; $i < count($arr); $i++) {
            echo "$arr[$i] ";
        }

        echo "<br/><br/><br/>";
        
        echo Obj::iAmStatic();
        
        echo "<br/><br/><br/>";

        $dimarr = array(
        "perros" => array(
            "bulldog" => array("Kevin", "Tobi"),
            "caniche" => array("Pepito", "Pepito2")),
        "gatos" => array(
            "siameses" => array("Otis", "Otis2"),
            "persas" => array("Persas1", "Persas2")
        ));

        echo $dimarr["gatos"]["siameses"][1];
    ?>
</body>
</html>