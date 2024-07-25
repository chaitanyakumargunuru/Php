<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exception Handling</title>
</head>
<body>
<p><a href="index.php">Go back</a></p>
    <?php
        try {
            echo 2/0 ;
        } catch (\Throwable $th) {
            echo "Error ".$th -> getMessage(). "is occured at line ".$th ->getline()." on file ".$th->getFile();
        }
    
        try{ if (True){
            throw new Exception( 2/0);}
        }catch(Exception $e){
            echo "Error".$e -> errorMessage();
        }
    
    
    
    ?>
    
</body>
</html>