<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] Variable Example</title>
</head>
<body>

    <!-- php Script -->
   <?php
        $first_num = 12;
        $second_num = 356;
        $temp = $first_num;
        $first_num = $second_num;
        $second_num = $temp;

        print("first_num = $first_num <br>
                second_num = $second_num");
   ?> 
</body>
</html>