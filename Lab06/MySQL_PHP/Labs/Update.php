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
        <table>
            <tr>
                <td>Item Description</td>
                <td><input type="text" size="20" maxlength="20" name="Item"></td>
            </tr>
            <tr>
                <td>Weight</td>
                <td><input type="text" size="20" maxlength="20" name="Weight"></td>
            </tr>
            <tr>
                <td>Cost</td>
                <td><input type="text" size="20" maxlength="20" name="Cost"></td>
            </tr>
            <tr>
                <td>Number Available</td>
                <td><input type="text" size="20" maxlength="20" name="Quantity"></td>
            </tr>
        </table>
        <input type="submit" value="Click to Submit">
        <input type="reset" value="Reset">
        <br>
    </form>

    <?php
    if (isset($_POST['Item']) && isset($_POST['Weight']) && isset($_POST['Cost']) && isset($_POST['Quantity'])) {
        $item = $_POST['Item'];
        $weight = $_POST['Weight'];
        $cost = $_POST['Cost'];
        $quantity = $_POST['Quantity'];

        $host = 'localhost';
        $user = 'root';
        $passwd = 'mysql';
        $database = 'mydatabase';

        $connect = mysqli_connect("127.0.0.1", $user, $passwd);
        $table_name = 'products';

        $query = "UPDATE $table_name
                    SET Product_desc = '$item', Cost = $cost, Weight = $weight, Numb = $quantity
                    WHERE Product_desc = '$item'
                    ";
        print "The Query is <i>$query</i><br>";

        mysqli_select_db($connect, $database);

        if (mysqli_query($connect, $query)) {
            print "<i style=\"font-size:16px; color: aquamarine\">Update $database successfully!</i><br><br>";
            $query = "SELECT * FROM $table_name";
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
            }
        } else {
            print "<i style=\"font-size:16px; color: red\">Update $database failed!</i>";
        }
        mysqli_close($connect);
    }
    ?>
</body>

</html>