<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="frame">
            <table>
                <tr>
                    <td>
                        <label for="email">Enter the email address</label>
                    </td>
                    <td>
                        <input type="text" size="15" maxlength="40" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="url">Enter the URL address</label>
                    </td>
                    <td>
                        <input type="text" size="15" maxlength="40" name="url">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Enter the phone number</label>
                    </td>
                    <td>
                        <input type="text" size="15" maxlength="40" name="phone">
                    </td>
                </tr>
            </table>

            <input type="submit" value="Submit">
    </form>

    <?php
        //VALIDATE EMAIL ADDRESS, URL ADDRESS AND PHONE NUMBER USING REGULAR EXPRESSIONS
        if (isset($_POST['email']) && isset($_POST['url']) && isset($_POST['phone'])) {
            $email = $_POST['email'];
            $url = $_POST['url'];
            $phone = $_POST['phone'];

            //VALIDATE EMAIL ADDRESS
            $email_pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
            if (preg_match($email_pattern, $email)) {
                print "<br> Got valid email address=$email <br>";
            } else {
                print "<br> Invalid email address=$email <br>";
            }

            //VALIDATE URL ADDRESS
            $url_pattern = '/^(http|https):\/\/[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+/';
            if (preg_match($url_pattern, $url)) {
                print "<br> Got valid URL address=$url <br>";
            } else {
                print "<br> Invalid URL address=$url <br>";
            }

            //VALIDATE PHONE NUMBER
            $phone_pattern = '/^[0][0-9]{9}$/';
            if (preg_match($phone_pattern, $phone)) {
                print "<br> Got valid phone number=$phone <br>";
            } else {
                print "<br> Invalid phone number=$phone <br>";
            }
        }
    ?>
</body>
</html>