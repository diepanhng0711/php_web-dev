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
    if (isset($_POST["prefer"])) {
        $prefer = $_POST["prefer"];
        $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');

        if (count($prefer) == 0) print("Oh no! Please pick something as your favorite! ");
        else {
            print("<br> Your selection were <ul>");
            foreach ($prefer as $item) {
                print "<li>$menu[$item]</li>";
            }
            print("</ul>");
        }
    } else {
        print("Oh no! Please pick something as your favorite! ");
    }
    ?>
</body>

</html>