<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] String Variables</title>
</head>
<body>
    
    <?php 
        // $x ="banana";
        // $sum = 1 + $x;
        // print ("y=$sum");

        $firstname = 'John';
        $lastname = "Smith";
        $fullname = $firstname . $lastname;
        $fullname2 = $firstname . " " . $lastname;
        $fullname3 = "$firstname $lastname";
        $fullname4 = "$firstname        $lastname";         //Skip blank
        $fullname5 = $firstname . " van  der " . $lastname;
        
        print("FullName = $fullname <br>");
        print("FullName = $fullname2 <br>");
        print("FullName = $fullname3 <br>");
        print("FullName = $fullname4 <br>");
        print("FullName = $fullname5 <br>");
    ?>
</body>
</html>