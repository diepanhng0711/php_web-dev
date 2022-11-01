<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Got Flip Result</title>
</head>
<body>
    <?php
        srand ((double) microtime() * 10000000);
        $flip = rand (0, 1);
        $pick = $_POST["pick"];

        if ($flip == $pick) {
            print("<p style=\"font-size: 20px; color: blue;\">Flip = $flip<br>You Win!</p>");
        } else {
            print("<p style=\"font-size: 20px; color: blue;\">Flip = $flip<br>You Lose!</p>");
        }
    ?>
</body>
</html>