<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance from Chicago!</title>
</head>

<body>
    <span style="font-size: 16px; color: blue">Welcome to the Distance Calculation Page</span>
    <br>The page that calsuates the distances form Chicago!
    <br>Select a destination:
    <form action="./CheckDistance.php" method="GET">
        <select name="destination" size=5 multiple>
            <option> Boston </option>
            <option> Dallas </option>
            <option> Las Vegas </option>
            <option> Miami </option>
            <option> Nashville </option>
            <option> Pittsburgh </option>
            <option> San Francisco </option>
            <option> Toronto </option>
            <option> Washington, DC </option>
        </select>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>