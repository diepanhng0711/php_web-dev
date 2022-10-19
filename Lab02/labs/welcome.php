<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $uni = $_POST["uni"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $year = $_POST["year"];
        $month = $_POST["month"];
        $day = $_POST["day"];
        // $hobby[] = $_POST["hobby"];
        $color = $_POST["color"];

        // print_r($_POST);

        print("<br>Your name is $name");
        print("<br>Your class is $class");
        print("<br>Your uni is $uni");
        print("<br>Your height is $height");
        print("<br>Your weight is $weight");
        print("<br>Your year is $year");
        print("<br>Your month is $month");
        print("<br>Your day is $day");
        print("<br>Your hobby is: <br>");
        print("<ul>");
        foreach($_POST["hobby"] as $value) {
            print("<li>$value</li>");
        }
        print("</ul>");

        print("<br>Your color is $color");
    ?>
</body>
</html>