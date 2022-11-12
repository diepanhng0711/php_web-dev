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
        $table_name = 'products';
        $connect = mysqli_connect($server, $user, $pass);

        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else {
            $SQLcmd = "CREATE TABLE $table_name (
                            ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            Product_desc VARCHAR(50),
                            Cost INT,
                            Weight INT,
                            Numb INT
            )";
        }

        mysqli_select_db($connect, $mydb);
        if(mysqli_query($connect, $SQLcmd)) {
            print '<p style="color:blue">Created table</p>';
            print "<i>$table_name</i> in database<i>$mydb</i><br>";
            print "<br>SQLcmd=$SQLcmd";
        } else {
            die("Table create creation failed SQL=$SQLcmd");
        }

        mysqli_close($connect);
    ?>
</body>
</html>