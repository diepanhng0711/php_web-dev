<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess a number</title>
</head>
<body>
    <h1>Guess a number</h1>
    <form action="GuessANumber.php" method="post">
        <label for="guess">Guess a number between 1 and 100:</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Guess">
    </form>
</body>
</html>