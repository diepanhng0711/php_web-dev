<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check log-in session</title>
</head>
<body>
    <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<h1 style=\"color: aqua\">Welcome back, " . $_SESSION['username'] . "</h1>";
        } else {
            header("Location: ./login.php");
        }
    ?>
</body>
</html>