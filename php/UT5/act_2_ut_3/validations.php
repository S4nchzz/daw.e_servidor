<?php
    function printForm() {
        echo <<<_END
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title></title>
                </head>
                <body>
                    <form action="validations.php" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="name">
                            Name:
                            <input id="name" name="name" type="text" placeholder="Name"/>
                        </label>

                        <label for="email">
                            Email:
                            <input id="email" name="email" type="text" placeholder="example@email.com"/>
                        </label>

                        <label for="website">
                            Website:
                            <input id="website" name="website" type="text" placeholder="example@website.com"/>
                        </label>

                        <label for="comment">
                            Comment:
                            <textarea name="comment" id="comment"></textarea>
                        </label>
                        
                        <div>
                            <label for="male">
                                Male:
                                <input type="radio" id="male" name="gender" value="Male"/>
                            </label>

                            <label for="female">
                                Female:
                                <input type="radio" id="female" name="gender" value="Female"/>
                            </label>
                        </div>

                        <input style="width: 70px;" type="submit" value="Submit"/>
                    </form>
                </body>
            </html>
        _END;
    }

    function validate() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];
        $gender = $_POST['gender'];

        if (!isset($name) || !isset($email) || !isset($website) || !isset($comment) || !isset($gender)) {
            echo 'POR FAVOR, INTRODUZCA TODOS LOS DATOS';
            printForm();
        }
    }

    if (!isset($_POST['name'])) {
        printForm();
    } else {
        validate();
    }
?>