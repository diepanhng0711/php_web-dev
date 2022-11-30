<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Validation</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="frame">
            <table>
                <tr>
                    <td>
                        <label for="date">Enter the date</label>
                    </td>
                    <td>
                        <input type="text" size="15" maxlength="40" name="date">
                    </td>
                </tr>
            </table>

            <input type="submit" value="Submit">
        </div>
    </form>

    <?php
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        $two = '[[:digit:]]{2}';
        $month = '[0-1][[:digit:]]';
        $day = '[0-3][[:digit:]]';
        $year = "2[[:digit:]]$two";

        if (preg_match("/^($month)\/($day)\/($year)$/", $date)) {
            print "Got valid date=$date <br>";
        } else {
            print "Invalid date=$date";
        }
    }
    ?>
</body>

</html>