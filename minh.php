<?php 
echo "Hello World!";
$name = "Minh";
$age = "20";
$city = "Ha Loi";
$School ='Aptech';
echo "My name is $name and I am $age years old i live in $city and i study at $School <br>" ;
echo "";


$a = 15;
$b = 16;
$sum = $a + $b;
$diff = $a - $b;
$prod = $a * $b;
$quot = $a / $b;
$mod = $a % $b;
echo "Sum: $sum ,<br>  Difference: $diff ,<br> Product: $prod,<br> Quotient: $quot,<br> Modulus: $mod <br>";



$sales = 1000;
$commission = 0;
$salary = 0;
if($sales >1000){
    $commission = $sales * 0.1;

}else{
    $salary = $sales * 0.05;
}
echo "Commission: $commission <br>";
echo "Salary: $salary <br>";



$score = 85;
if($score >= 90){
    echo "Excellent";
}elseif($score >= 80){
    echo "Good";
}elseif($score >= 70){
    echo "Average";
}else{
    echo "Fail";
}

echo "<br>";
$day = 3;
switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}




