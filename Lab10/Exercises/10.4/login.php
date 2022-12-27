<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input {
            margin-left: 6px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <form action="./welcome.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username" required>
                </td>
            </tr>
            <br>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td style="margin-left: 5px;">
                    <input type="password" name="password" placeholder="Password" required>
                </td>
            </tr>
        </table>

        <br>
        <input type="reset" name="reset" id="" value="Reset">
        <input type="submit" name="submit" id="" value="Login">
    </form>
</body>

</html>