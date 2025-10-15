<?php
$scores = array(8.5, 6.0, 9.0, 4.5, 7.5);


function checkavg($avg){
    if($avg <= 10 && $avg >= 8){
        echo"Xuat sac<br>";
    }elseif($avg >= 6.5&& $avg <= 8){
        echo"Gioi<br>";
    }elseif($avg >= 5 && $avg < 6.5){
        echo"Kha<br>";
    }elseif($avg<5){
        echo "Yeu";
        echo"Canh cao hoc lai<br>";
    }else{
        echo "Diem khong hop le";
    }
}

checkavg(8.5)





?>