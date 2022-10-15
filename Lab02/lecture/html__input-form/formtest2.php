<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] HTML Input Form in PHP</title>
</head>
<body>
    <form action="https://www.w3schools.com/php/" method="POST">
        Click SUBMIT to start our initial PHP program.
        <br>

        <input type="text" size="15" maxlength="24" name="fname">
        <br>
        <br>
        <input type="password" size="15" maxlength="20" name="pass1">

        <br>
        <br>

        <input type="submit" value="Click to Submit">
        <input type="reset" value="Erase and Restart">

        <br>
        <br>

        <!--TEXT AREA-->
        <textarea name="Comments" id="" cols="30" rows="2">
            123456789012345678901234567890123456789012345678901234567890123
        </textarea>

        <br>
        <br>

        <!--RADIO BOXES-->
        <input type="radio" name="contact" value="Yes" checked>
        <input type="radio" name="contact" value="No">
        <input type="radio" name="contaDct" value="No">

        <br>
        <br>

        <!--CHECK BOXES-->
        <input type="checkbox" name="Walk" value="Yes" checked> Walk
        <input type="checkbox" name="Bike" value="Yes" checked> Bike
        <input type="checkbox" name="Car" value="Yes"> Car
        <input type="checkbox" name="Plane" value="Yes"> Plane

        <br>
        <br>

        <input type="checkbox" name="travel" value="Car" checked> Car?
        <input type="checkbox" name="travel" value="Bike" checked> Bike?
        <input type="checkbox" name="travel" value="Horse"> Horse?
        <input type="checkbox" name="travel" value="None"> None of the above?

        <br>
        <br>

        <!--SELECTION LIST-->
        <select name="Accomodations" id="" size="3" multiple>
            <option>A fine hotel</option>
            <option selected>A cheap motel!</option>
            <option>A tent in the parking lot</option>
            <option>Just give me a sleeping bag checked</option>
        </select>

    </form>
</body>
</html>