<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisions</title>
</head>
<body>
    
    <?php
        $grade1 = $_POST["grade1"];
        $grade2 = $_POST['grade2'];

        $average = ($grade1 + $grade2)/2;

        print("Your average score is $average<br>");
        if ($average >= 8.5) {
            print("You got an A!");
        } else if ($average >= 7 && $average < 8.5) {
            print("You got a B!");
        } else if ($average >= 5.5 && $average < 7) {
            print("You got a C!");
        } else if ($average >= 4 && $average < 5.5) {
            print("You got a D!");
        } else {
            print("You got a F!");
            print("<br>You've failed this subject!");
        }

        print("<br><br>");

        $max = $grade1;
        if ($grade2 > $max) {
            $max = $grade2;           
        }

        print("max(grade1, grade2) = $max");

        print("<br>");
    ?>
</body>
</html>