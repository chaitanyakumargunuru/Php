<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYsql</title>
</head>
<body>
    <?PHP
    $server = "127.0.0.1";
    $username = "root";
    $password = "122ID0413";
    $database = "chaitu";

    $conn = mysqli_connect($server , $username, $password, $database);

    if ($conn == True){
        echo "connection succes";
    }else{
        echo "connection failed";
    }

    $query = "select * from students";

    $y=mysqli_query($conn,$query);
    var_dump($y); 
    mysqli_close($conn);
    ?>
</body>
</html>