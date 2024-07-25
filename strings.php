<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
<h1>strlen()</h1>
    <?php
    
    $string="this is a sample sentence for string operations.";
    echo "string:  ",$string;

    echo strlen($string);
    echo "<br>"; 
    ?>
    <h1>strrev()</h1>
    <?php
    
    $string="this is a sample sentence for string operations.";
    echo "string:  ",$string."<br>";
    
    echo "reversed";
    echo"<br>";
    echo strrev($string);
    echo "<br>"; 
    ?>
    <h1>strpos()</h1>
    <?php
    
    $string="this is a sample sentence for string operations.";
    echo "string:  ",$string."<br>";

    echo"<br>";
    echo "pos of is";
    echo strpos($string,"is");
    echo "<br>"; 
    ?>
    <h1>str_word_count()</h1>
    <?php
    
    $string="this is a sample sentence for string operations.";
    echo "string:  ",$string."<br>";
    
    echo"<br>";
    echo str_word_count($string);
    echo "<br>"; 
    ?>
    <h1>str_replace()</h1>
    <?php
    
    $string="this is a sample sentence for string operations.";
    echo "string:  ",$string."<br>";
    
    echo "replaced by new";
    echo"<br>";
    echo str_replace("sample","new",$string);
    echo "<br>"; 
    ?>
    
</body>
</html>