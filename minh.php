<?php
$number = 1;
while ($number <= 20) {
    if ($number % 2 == 0) {
        echo "$number<br>";
    }
    $number++;
}

echo"--------------------------------<br>";
for( $i=3;$i<=30;$i++){
    if($i%3==0){
        echo "$i<br>";
    }
}
echo"--------------------------------<br>";
$count = 1 ;
do{
    echo"PHP is fun!<br>";
    $count++;
}while($count <= 5);

echo"--------------------------------<br>";
$minh = 0;
while($minh <= 10){
    $minh = $minh + 1;
    if($minh == 5){
        continue;
    }elseif($minh == 8){
        break;
    }
    echo "$minh<br>";
}
echo "LOOP END<br>";
echo"--------------------------------<br>";

function calculateArea($radius){
    $area = 3.14 * $radius * $radius;
    echo"ban kinh $radius co dien tich la $area<br>";
}

calculateArea(3);
calculateArea(5);
calculateArea(7);


?>


