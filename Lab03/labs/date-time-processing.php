<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Date Time Validation</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <p>Please enter your name and select date and time for your appointment</p>

        <div class="info">
            <div class="info info__field">
                <label for="name" class="info info__field-label">Your name:</label>
                <input type="text" name="name" class="info info__field-text-input" size="20" maxlength="24">
            </div>
            <div class="info info__field">
                <label for="date" class="info info__field-label">Date:</label>

                <div class="info__field-selection-bar">
                    <div class="info__field-selection">
                        <select name="day" id="day">
                            <?php
                            for ($d = 1; $d <= 31; $d++) {
                                echo "<option>$d</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="info__field-selection">
                        <select name="month" id="month">
                            <?php
                            for ($m = 1; $m <= 12; $m++) {
                                echo "<option>$m</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="info__field-selection">
                        <select name="year" id="year">
                            <?php
                            for ($y = 1970; $y <= 2022; $y++) {
                                echo "<option>$y</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="info info__field">
                <label for="time" class="info info__field-label">Time:</label>

                <div class="info__field-selection-bar">
                    <div class="info__field-selection">
                        <select name="hour" id="hour">
                            <?php
                            for ($hour = 0; $hour <= 23; $hour++) {
                                echo "<option>$hour</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="info__field-selection">
                        <select name="minute" id="minute">
                            <?php
                            for ($min = 0; $min <= 59; $min++) {
                                echo "<option>$min</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="info__field-selection">
                        <select name="sec" id="sec">
                            <?php
                            for ($sec = 0; $sec <= 59; $sec++) {
                                echo "<option>$sec</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-wrapper">
            <input type="submit" class="btn" value="Submit">
            <input type="reset" class="btn" value="Reset">
        </div>

        <div>
            <?php
            if (array_key_exists('name', $_GET)) {
                $name = $_GET['name'];
                $day = $_GET['day'];
                $month = $_GET['month'];
                $year = $_GET['year'];
                $hour = $_GET['hour'];
                $minute = $_GET['minute'];
                $sec = $_GET['sec'];

                echo "<br>Hi $name<br>";
                echo "You have chosen to have an appointment on $hour:$minute:$sec, $day/$month/$year<br><br>";
                echo "More information<br><br>";
                echo "In 12 hours, the time and date is: " . date("g:i:s A, j/m/Y", mktime($hour + 12, $minute, $sec, $month, $day, $year)) . "<br>";

                switch ($month) {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        echo "This month has 31 days";
                        break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        echo "This month has 30 days";
                        break;
                    case 2:
                        if ($year % 4 == 0) {
                            echo "This month has 29 days";
                        } else {
                            echo "This month has 28 days";
                        }
                        break;
                    default:
                        echo "Invalid month";
                        break;
                }
            }
            ?>
        </div>
    </form>
</body>

</html>