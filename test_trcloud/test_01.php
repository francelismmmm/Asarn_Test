<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test_01.php" method="post">
    <label>Number of Star : </label>
    <input type="text" name="number" required placeholder="Please Input Number"> 
    <button type="submit" >Go</button> 
    </form>
    
    <?php /*echo*/  $number = intval($_POST["number"]);?>
    <br>
    <?php 
    
    if($number%2 == 0 && $number>0 ){
        //echo "even <br>";
        for($i=1;$i<=$number;$i++){
            for($n=1;$n<=$i;$n++)
            {echo "*";}
            echo"<br>";
        }
    }
    else if($number%2 != 0 && $number>0 )
       { //echo "odd <br>";
        for($n=$number;$n>=1;$n--){
        for($i=$n;$i>=1;$i--){
            echo"*";    
        }echo"<br>";}
    }
    
    
    
    ?>
    <?php
// Turn off all error reporting

?>
</body>
</html>