<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overloading</title>
</head>
<body>
    <?php
        class MethodTest {
            public function __call($name, $argument) {
                //Note: value of $name is case sensitive
                echo "Calling object method '$name' " . implode(', ', $argument) . "<br>";
            }

            /** As of PHP 5.3.0 */
            public static function __callStatic($name, $arguments)
            {
                //Note: value of $name is case sensitive
                echo "Calling static method '$name' " . implode(', ', $arguments) . "<br>";
            }
        }

        $obj = new MethodTest;
        $obj->runTest('in object context');

        MethodTest::runTest('in static context');   // As of PHP 5.3.0
    ?>
</body>
</html>