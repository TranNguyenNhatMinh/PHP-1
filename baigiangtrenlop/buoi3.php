<?php
// B1. Khai báo mảng như nào
$arr = [];
$arr = array();

// B2. Thêm 1 phần tử vào như nào
// key: value -> fullname: TRAN VAN DIEP, birthday: 1988, address: Nam Dinh
$arr['fullname'] = 'TRAN VAN DIEP';
$arr['birthday'] = '1988';
$arr['address'] = 'Nam Dinh';

$arr = [
    'fullname' => 'TRAN VAN DIEP',
    'birthday' => '1988',
    'address' => 'Nam Dinh'
];

// B3. Truy cập vào 1 phần tử như nào
// lấy dữ liệu -> cần biết key
echo $arr['fullname'];
echo $arr['birthday'];
// echo $arr['abc'];
if (isset($arr['address'])) {
    echo $arr['address'].'<br>';
}

// duyet cac phan tu trong mang
foreach ($arr as $key => $value) {
    echo "$key: $value <br>";
}

// xoa 1 phan tu trong mang
unset($arr['address']);
var_dump($arr);

foreach ($arr as $key => $value) {
    echo "$key: $value <br>";
}


$arr5 = [
    'data' => [
    [
        'project' => 'php',
        'owner' => 'minh',
    ] , [
        'project' => 'php',
        'owner' => 'minh',
    ] , [
        'project' => 'php',
        'owner' => 'minh',
    ]
    ] ,
    ];
echo "<pre>";
var_dump($arr5);
echo "</pre>";


// tao ma phong ban bang mang
$array = [
    'A' => 'director',
    'B'=> 'employee',
    'C'=> 'owner',
] ;

foreach ($array as $key => $value) { // duyet mang
    echo "$key: $value <br>";
}


if(isset($array['A'])) { // isset: kiem tra key co ton tai hay khong
    echo "Co ton tai A";
} else {
    echo "Khong ton tai A";
}





?>