<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP classes and objects</title>

    <style>
        a {
        text-decoration:None;
        font-size:43px;
        }
    </style>
</head>
<body>
<p><a href="index.php">Go back</a></p>

    <?php
    class housedetails{

        public $length=0;
        public $width=0;
        public $noofdoors=0;
        protected $noofrooms=0;
        private $insidepaint="brown";
        public $outpaint="black";

        public function totalhousearea(){
            return $this -> length * $this -> width;
        }
        public function totaldoors(){
            return $this -> noofdoors;
        }
        public function noofrooms(){
            return $this -> noofrooms;
        
        }
        public function inpaint(){
            return $this -> insidepaint;
        
        }
        public function outsidepaint(){
            return $this -> outpaint;
        }
    }

    $house1=new housedetails;

    $house1 -> length=40;
    $house1 -> width=50;
    $house1 -> noofdoors=5;
    //  $house1 -> noofrooms=4;
    // $house1 -> insidepaint="yellow";
    $house1 -> outpaint="pink";

    echo "total area of house is ".$house1 -> totalhousearea()."<br>";
    echo "total doors in house are ".$house1 -> totaldoors()."<br>";
    echo "no of rooms in house are ".$house1 -> noofrooms()."<br>";
    echo "inside paint of house is ".$house1 -> inpaint()."<br>";
    echo "outside paint of house is ".$house1 -> outsidepaint()."<br>";
    ?>
</body>
</html>