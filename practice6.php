<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 6</title>
</head>
<body>

<form action="" method="post">
    <h1>Enter your Grade</h1>
    <input type="number" name="score" id="">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(isset($_POST['submit'])){

        $score = $_POST['score'];

        if($score >= 100){
            echo "CLASS S";
        }else if( $score >= 90){
            echo "CLASS A";
        }else if( $score >= 80){
            echo "CLASS B";
        }else if( $score >= 70){
            echo "CLASS C";
        }else if( $score >= 60){
            echo "CLASS D";
        }else if( $score >= 50){
            echo "CLASS E";
        }else{
            echo "CLASS F";
        }
    }
?>

</body>
</html>