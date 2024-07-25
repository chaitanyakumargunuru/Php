<?php
 $name = $_POST["name"];
$email = $_POST["email"];

function sanitize_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
};

echo "username is :".$name."<br>";
echo "useremail is : $email <br>";
?>