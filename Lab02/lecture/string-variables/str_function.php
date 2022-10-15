<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>[Lab02] String Functions</title>
</head>
<body>
    
    <?php
        //strlen($str)
        $comments = "Good Job!";
        $len = strlen($comments);
        print("length = $len");

        print("<br><br>");

        //trim($str)
        $in_name = " Joe   Jackson  ";
        print("in_name = $in_name<br>");

        $name = trim($in_name);
        print("name = $name");

        print("<br><br>");

        //strtolower($str) - strtoupper($str)
        $inquote = "Now Is The Time";
        $lower = strtolower($inquote);
        $upper = strtoupper($inquote);

        print("Upper = $upper  -- Lower = $lower");

        print('<br><br>');

        //substr($str, _str_start_position, <_number_of_characters_to_extract>)
        $date = "12/25/2022";
        $month = substr($date, 0, 2);
        $day = substr($date, 3, 2);
        $year = substr($date, 6 /* ,4 */);
        print("Month=$month Day=$day Year=$year");

        print("<br><br>");

    ?>
</body>
</html>