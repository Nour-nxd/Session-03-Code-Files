<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LAB 3 FORMs</title>
    </head>
    <body>
    <h1>Welcome to The Manchester College</h1>
        <h3>Please fill in the form below</h3><br>
    <!--HTML Form-->
    <form action = "action-handling.php" method = "POST">
        <dl>
            <dt>Name:</dt>
                <dd><input type = "text" name = "name"></dd>
            <dt>Postcode:</dt>
                <dd><input type = "text" name = "address"></dd>
            <dt>Email Address:</dt>
                <dd><input type = "text" name = "mail"></dd>
            <dt>Phone Number:</dt>
                <dd><input type = "text" name = "number"></dd>
            
        </dl>
        <p><input type = "submit"></p>
    </form>

    </body>
</html>