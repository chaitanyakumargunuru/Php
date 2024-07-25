<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Date</title>
</head>
<body>
    <?PHP
     echo date("d / m / y");
     echo "<br>";
     $d = strtotime("11:00am 29 jun 2023");
     echo date("y-m-d h:i:sa ",$d);
    
    
    ?>
</body>
</html>