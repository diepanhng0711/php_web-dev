<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuna Cafe</title>
</head>
<body>
    <p style="font-size: 16px; color: blue">Welcome to the Tuna Cafe!</p>
    <form action="./Eg1View.php" method="POST">
        <?php
            $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');

            $bestseller = 2;
            print('Please indicate all your favorite dishes.<br>');

            for ($i = 0; $i < count($menu); $i++) {
                print ("<input type=\"checkbox\" name=\"prefer[]\" value=$i> $menu[$i]");
                if ($i == $bestseller) {
                    print '<span style="color: red;"> Our Best Seller!!!</span>';
                }
                print '<br>';
            }
        ?>
        <input type="submit" value="Click to submit">
        <input type="reset" value="Erase and Restart">
    </form>
</body>
</html>