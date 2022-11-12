<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <i style="margin-right: 20px;">Input:</i>
        <input type="text" name="search" size="20">
        <br>
        <br>
        <input type="submit" value="Click To Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    $host = 'localhost';
    $user = 'root';
    $passwd = 'mysql';
    $database = 'mydatabase';

    $connect = mysqli_connect("127.0.0.1", $user, $passwd);
    $table_name = 'products';

    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        print "$table_name data<br><br>";
        // $query = "SELECT * FROM $table_name WHERE (Product_desc = \"$search\")";
        // $query = "SELECT * FROM $table_name WHERE (Product_desc = '$search')";
        $query = "SELECT * FROM $table_name WHERE (Product_desc LIKE '%$search%')";
        print "The Query is <i>$query</i><br>";

        mysqli_select_db($connect, $database);

        $result_id = mysqli_query($connect, $query);
        if ($result_id) {
            print "<table border=1>";
            print "<th>Num<th>Product<th>Cost<th>Weight<th>Count";
            while ($row = mysqli_fetch_row($result_id)) {
                print "<tr>";
                foreach ($row as $field) {
                    print "<td>$field</td>";
                }
                print "<tr>";
            }
            print "<table>";
        } else {
            die("Query = $query failed!");
        }
    }

    mysqli_close($connect);
    ?>
</body>

</html>