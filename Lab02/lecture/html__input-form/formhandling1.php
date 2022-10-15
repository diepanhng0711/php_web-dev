<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] HTML Input form Handling with PHP scripts</title>
</head>
<body>
    <form action="./formhd1.php" method="post">
        Enter email address: <input type="text" size="16" maxlength="20" name="email">
        <br>
        <br>

        <input type="radio" name="contact" value="Yes" checked> Yes
        <br>
        <input type="radio" name="contact" value="No"> No

        <br>
        <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

    </form>

    <?PHP phpinfo(); ?>
    
    
</body>
</html>