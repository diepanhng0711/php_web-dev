<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table {
            display: flex;
            margin: 10px 10px 0;
            width: 100%;
        }

        .table__column {
            width: 25%;
        }

        .display {
            display: flex;
            margin: 10px 5px 0;
            width: 100%;
        }

        .display__table {
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    function user_sort($a, $b)
    {
        // smarts is all-important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $example = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );

    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );

    if (isset($_POST['submit'])) {
        $submitted = $_POST['submit'];
        $sort_type = $_POST['sort_type'];
    }

    if (!empty($submitted)) {
        if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            $sort_type($values, 'user_sort');
        } else {
            $sort_type($values);
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="table">
            <div class="table__column">
                <td><input type="radio" name="sort_type" value="sort" /> Standard sort </td><br>
                <td><input type="radio" name="sort_type" value="rsort" /> Reverse sort</td>
            </div>
            <div class="table__column">
                <td><input type="radio" name="sort_type" value="usort" /> User-defined sort</td><br>
                <td><input type="radio" name="sort_type" value="ksort" /> Key sort</td>
            </div>
            <div class="table__column">
                <td><input type="radio" name="sort_type" value="krsort" /> Reverse key sort</td><br>
                <td><input type="radio" name="sort_type" value="uksort" /> User-defined key sort</td>
            </div>
            <div class="table__column">
                <td><input type="radio" name="sort_type" value="asort" /> Value sort</td><br>
                <td><input type="radio" name="sort_type" value="arsort" /> Reverse value sort</td><br>
                <td><input type="radio" name="sort_type" value="uasort" /> User-defined value sort</td><br>
            </div>
        </div>

        <p style="text-align: center;">
            <input type="submit" name="submit" value="Sort" />
            <input type="reset" value="Reset" />
        </p>
    </form>

    <div class="display">
        <div class="display__table">
            <p>Values unsorted (before sort) : </p>
            <ul>
                <?php
                foreach ($example as $key => $value) {
                    print "<pre><li><b>$key</b>\t: $value </li></pre>";
                }
                ?>
            </ul>
        </div>
        <div class="display__table">
            <p>Values <? $submitted ? "sorted by $sort_type" : "unsorted"; ?> : </p>
            <ul>
                <?php
                foreach ($values as $key => $value) {
                    print "<pre><li><b>$key</b>\t: $value </li></pre>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>