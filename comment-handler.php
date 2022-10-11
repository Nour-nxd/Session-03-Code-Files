<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            // include 'action.php';
            // include 'action-handeling.php';
            // include 'choices.php';
            // include 'choice-handler.php';
            // $name = $_POST['name'];
            // $address = $_POST['address'];
            // $mail = $_POST['mail'];
            // $number =$_POST['number'];
            // $comment = $_POST['comment'];
            // echo "Name: $name<br>Postcode: $address<br>Email: $mail<br>Phone number: $number";

            // this is to check that the user has entered anything in the comment section
            // if they did then a message will be displayed
            if (!empty($_POST['comment'])) {
                $comment = $_POST['comment'];
                echo '<h3>Thank you for your feedback</h3>';
            }
            // if the comment box is left empty then the user will be asked to enter some feedback
            else {
                $comment = NULL;
                echo 'You must enter some feedback<br>';
            }

        ?>
    </body>

</html>