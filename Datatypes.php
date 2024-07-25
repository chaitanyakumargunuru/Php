<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Datatypes</title>
</head>
<body>
    <a href="index.php">Go Back</a>
    <h1>integers</h1>
    <?php
    $a=21;
    echo $a;
    var_dump($a);
    echo "<br>";
    $a2=0x1A;
    echo $a2;
    var_dump($a2);
    echo "<br>";
    ?>
    <h1>Float</h1>
    <?php
    $b=4.3;
    var_dump($b);
    echo"<br>";
    ?>
    <h1>Strings</h1>
    <?php
    $cold="chaitanya";
    var_dump($cold);
    echo "<br>"
    ?>
    <h1>Arrays</h1>
    <?php
    $fruit=["apple","banana","pine apple"];
    echo $fruit;
    var_dump($fruit);
    echo "<br>";

    $ind_arr=array(
        "chai" => 21,
        "naidu" => 13,
        "yash" => 1
    );
    echo $ind_arr;
    var_dump($ind_arr);
    echo "<br>";

    echo $ind_arr["chai"];
    ?>
    <h1>Objects</h1>
    <?php
    class student{
        public $name="chai";
        function show_name(){
            return $name;
        }
    };
    $student =new student;
    var_dump($student);
    ?>
</body>
</html>