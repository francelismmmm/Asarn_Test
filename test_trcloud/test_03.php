<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*function square($n,$i){
  return [$n => $i];
}

$a=[1,2,3,4,5];
$b=[1,3,5,7,9];

$newArray = array_map('square',$a,$b);

echo "<pre>";
print_r($newArray);
echo "</pre>";*/

$A1= array (
  array('Code'=>101,
        'Name'=>'AAA'),
  array("Code"=>102,
        "Name"=>"BBB"),
  array("Code"=>103,
        "Name"=>"CCC"),      
  
);

$DATA1 = array_column($A1,'Name','Code');
print_r($DATA1);
echo"<br>";

$A2= array (
  array('Code'=>103,
        'City'=>'Singapore'),
  array("Code"=>102,
        "City"=>"Tokyo"),
  array("Code"=>101,
        "City"=>"Singapore"),      
  
);

$DATA2 = array_column($A2,'City','Code');
print_r($DATA2);
  echo"<br>";
 
  print_r ($A1);
  echo"<br>";
  print_r ($A2);
  echo"<br>";
  echo"<br>";
  
  echo"Input Array1 <br>";
  echo"Code Name <br>";
ksort($DATA1);
foreach ($DATA1 as $key => $value) {
  echo "$key=$value<br>\n";//แสดง $c
}
echo"<br>";
echo"Input Array2 <br>";
echo"Code City <br>";
foreach ($DATA2 as $key => $value) {
  echo "$key=$value<br>\n";//แสดง $c
}


echo "<br>";
echo"Output <br>";
echo"Code Name City<br>";
foreach ($DATA1 as $key => $value) {
  $code1=$key;
  $value1=$value;//แสดง $c
  foreach ($DATA2 as $key => $value) {
    $code2=$key;//แสดง $c
    if($code1==$code2)
    {
      echo "$key=$value1=$value<br>\n";
    }
  }
}

 
?>
<?php /*
<p>Array1</p>
 <table border="2">
  <tr style="text-align: center;" >
                        <th><?=$A1[0][0]?></th>
                        <th><?=$A1[1][0]?></th>
                     </tr>
                     <?php for($i=1;$i<4;$i++){ ?>
                     <tr>
                     <td>
                    <?=$A1[0][$i]?>
                     </td>
                     <td>
                    <?=$A1[1][$i]?>
                     </td>
                    </tr>
                     <?php } ?>

 </table>
<br>
<p>Array2</p>
 <table border="2">
  <tr style="text-align: center;" >
                        <th><?=$A2[0][0]?></th>
                        <th><?=$A2[1][0]?></th>
                     </tr>
                     <?php for($i=1;$i<4;$i++){ ?>
                     <tr>
                     <td>
                    <?=$A2[0][$i]?>
                     </td>
                     <td>
                    <?=$A2[1][$i]?>
                     </td>
                    </tr>
                     <?php } ?>

 </table>*/?>


</body>
</html>

