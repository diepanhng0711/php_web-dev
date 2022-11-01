<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Function</title>
</head>
<body>
    <h1>Date Time Function</h1>
    <form action="DateTimeFunction.php" method="post">
        <label for="date">Enter the first date in the format YYYY-MM-DD:</label>
        <input type="text" name="date" id="date">

        <br>
        <br>

        <label for="date2">Enter the second date in the format YYYY-MM-DD:</label>
        <input type="text" name="date2" id="date2">

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST['date']) && isset($_POST['date2'])) {
            $date = $_POST['date'];
            $date2 = $_POST['date2'];
            $date1 = strtotime($date);
            $date2 = strtotime($date2);
            $diff = abs($date2 - $date1);
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        
            echo "<p>The first date is $date</p>";
            echo "<p>The second date is $date2</p>";
            echo "<p>The difference between the two dates is $years years, $months months, and $days days</p>";
            echo "<p>The first person is  years</p>";
            echo "<p>The first person is $years years, $months months, and $days days older than the second person</p>";
        }
    ?>
</body>
</html>