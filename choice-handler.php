<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Checking Set Values Handler</title>
    </head>
    <body>

    <!--All PHP scripts need to go inside these tags-->
    <?php
        #IF-Else stament where a variable is initialised with 
        #a submitted value or with NULL if no value has been selected 
        if (isset($_POST['course'])) {
            $course = $_POST['course'];
        }
        else {
            $course = NULL;
        }
        #IF-Else statement to show appropriate responses:
        if ($course != NULL) 
        {
            echo "<h4>Congratulations! You have chosen $course and completed the form and you are signed up for this course </h4>";
        
            }
        #Response if no selection is made from the list
        else {
            echo 'Please select an answer from the list';
        }
    


    ?>
    <form action = "comment-handler.php" method = "POST">
        <dl>
            <dt>How easy was it to enrol to complete the form and enroll on to this course:</dt>
                <dd><textarea rows = "10" cols = '25' name = "comment"></textarea></dd>
        </dl>
        <p><input type = "submit"></p>
    </form>
    </body>
</html>

