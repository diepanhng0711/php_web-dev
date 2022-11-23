<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test MySQL with PHP</title>
</head>
<body>
    <?php
        $server = 'localhost';
        $user = 'root';
        $pass = 'mysql';
        $mydb = 'mydatabase';   
        $table_name = 'products2';
        $connect = mysqli_connect($server, $user, $pass);

        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else {
            
        }

        mysqli_close($connect);
    ?>
</body>
</html>