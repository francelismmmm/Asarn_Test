<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ผู้ใช้กรอกได้ 1 ช่อง
    <br>
    <form action="test_02.php" method="post">

    <?php
error_reporting( error_reporting() & ~E_NOTICE );

?>
    <?php 
    
    $v1 = $_POST["value1"];
    $v2 = $_POST["value2"];
    $v3 = $_POST["value3"];
    $v4 = $_POST["value4"];
    $v5 = $_POST["value5"];
    
    if($v1!=""){
        $ratio=100/$v1;
        $v2=7/$ratio;
        $v3=107/$ratio;
        $v4=3/$ratio;
        $v5=104/$ratio;
    }
    if($v2!=""){
        $ratio=7/$v2;
        $v1=100/$ratio;
        $v3=107/$ratio;
        $v4=3/$ratio;
        $v5=104/$ratio;
    }
    if($v3!=""){
        $ratio=107/$v3;
        $v1=100/$ratio;
        $v2=7/$ratio;
        $v4=3/$ratio;
        $v5=104/$ratio;
    }if($v4!=""){
        $ratio=3/$v4;
        $v1=100/$ratio;
        $v2=7/$ratio;
        $v3=107/$ratio;
        $v5=104/$ratio;
    }if($v5!=""){
        $ratio=104/$v5;
        $v1=100/$ratio;
        $v2=7/$ratio;
        $v3=107/$ratio;
        $v4=3/$ratio;
    }
   
    
  

    

    ?>

    <table border="2">
                     <tr style="text-align: center;" >
                        <th>100</th>
                        <th>7</th>
                        <th>107</th>
                        <th>3</th>
                        <th>104</th>
                     </tr>


                     <tr style="text-align: center;">
                        <td><input type="text" name="value1" value="<?=$v1?>"></td>
                        <td><input type="text" name="value2" value="<?=$v2?>"></td>
                        <td><input type="text" name="value3" value="<?=$v3?>"></td>
                        <td><input type="text" name="value4" value="<?=$v4?>"></td>
                        <td><input type="text" name="value5" value="<?=$v5?>"></td>
                     </tr>
                     
                </table>
                <br>
                <input type="submit" value="Go">
                <a href="test_02.php">clear</a>
                </form>
</body>
</html>