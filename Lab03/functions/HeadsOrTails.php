<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collin Flip!</title>
</head>
<body>
    <p style="font-size: 20px; color: blue;">Please Pick Heads or Tails!</p>

    <form action="./GotFlip.php" method="POST">
        <?php
            print("<input type=\"radio\" name=\"pick\" value=0 > Heads<br>");
            print("<input type=\"radio\" name=\"pick\" value=1 > Tails<br>");
            print("<br>");
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>