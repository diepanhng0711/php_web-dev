<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert radians to degrees</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <p>Please enter the angle in radians or degrees</p>
        <div class="info">
            <div class="info info__field">
                <label for="mode" class="info info__field-label">Mode:</label>
                <input type="radio" name="mode" value="radians" checked>Radians
                <input type="radio" name="mode" value="degrees">Degrees
            </div>
            <div class="info info__field">
                <label for="angle" class="info info__field-label">Angle:</label>
                <input type="text" name="angle" class="info info__field-text-input" size="20" maxlength="24">
            </div>
            <br>
            <div class="info info__field">
                <input type="submit" value="Convert" class="info info__field-submit">
        </div>
    </form>
    <?php
        if (isset($_GET['mode']) && isset($_GET['angle'])) {
            $mode = $_GET['mode'];
            $angle = $_GET['angle'];
            if ($mode == 'radians') {
                $degrees = $angle * 180 / pi();
                echo "<p>$angle radians is $degrees degrees</p>";
            } else {
                $radians = $angle * pi() / 180;
                echo "<p>$angle degrees is $radians radians</p>";
            }
        }
    ?>
</body>
</html>