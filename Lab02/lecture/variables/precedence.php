<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] Expression Example</title>
</head>
<body>
    
    <?php 
        $x = 100 - 10 * 2;
        $y = 100 - (10 * 2);
        $z = (100 - 10) * 2;

        print("x = $x <br>");
        print("y = $y <br>");
        print("z = $z <br><br>");

        $grade1 = 50;
        $grade2 = 100;
        $grade3 = 75;

        $average = ($grade1 + $grade2 + $grade3) / 3;
        print("The average is $average"); 
    ?>
</body>
</html>