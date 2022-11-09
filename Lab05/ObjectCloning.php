<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Cloning</title>
</head>
<body>
    <?php
        class ObjectTracker {
            private static $nextSerial = 0;
            private $id, $name;

            function __construct($name) {
                $this->name = $name;
                $this->id = ++self::$nextSerial;
            }

            function __clone() {
                $this->name = "Clone of $this->name";
                $this->id = ++self::$nextSerial;
            }

            function getId() {
                return ($this->id);
            }

            function getName() {
                return ($this->name);
            }

            function setName($name) {
                $this->name = $name;
            }
        }

        $ot = new ObjectTracker("Zeev's Object");
        $ot2 = clone $ot;
        $ot2->setName("Another object");

        //1 Zeev's Object
        print($ot->getId() . " " . $ot->getName() . "<br>\n");

        //2 Clone of Zeev's Object 
        print($ot2->getId() . " " . $ot2->getName() . "<br>\n");
    ?>
</body>
</html>