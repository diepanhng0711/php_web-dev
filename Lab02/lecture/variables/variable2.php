<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Lab02] Variable Example</title>
</head>
<body>
    
    <!-- php Script -->
    <?php 
        $columns = 20;
        $rows = 12;
        $total_seats = $rows * $columns;

        $ticket_cost = 3.75;
        $total_revenue = $total_seats * $ticket_cost;

        $building_cost = 300;
        $profit = $total_revenue - $building_cost;

        print("Total Seats are $total_seats <br>");
        print("Total Revenue is $total_revenue <br>");
        print("Total profit is $profit");
    ?>
</body>
</html>