<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    $table_name = 'users';
    $username = $_POST['username'];
    $user = 'root';
    $passwd = '123456';

    $connect = mysqli_connect("127.0.0.1", $user, $passwd, 'lab10', 8111);
    if (mysqli_connect_errno()) {
        print("<h1 style=\" color: red \">MySQL connection failed!!!</h1>");
        die("Cannot connect to $server using $user");
        exit();
    }

    $SQLcmd = "SELECT `password` FROM $table_name WHERE UserName = '$username'";
    $result = mysqli_query($connect, $SQLcmd);
    $password = $result->fetch_assoc();

    if (mysqli_num_rows($result) != 0 && strcmp($password["password"], $_POST['password']) == 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        print("<h1 style=\"color: aqua\">Welcome back, $username </h1>");
    } else if  (mysqli_num_rows($result) != 0 && strcmp($password["password"], $_POST['password']) != 0) {
        print("<h1 style=\"color: red\">Wrong password!</h1>");
    } else {
        print("<h1 style=\"color: red\">User not found!</h1>");
    }
    ?>
</body>

</html>