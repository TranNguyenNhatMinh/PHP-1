<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Chon Phong Ban</h2>
    <form method="post" > <!-- get: truyen du lieu len url, post: khong hien tren url -->
        <label for="phongban">Phong Ban</label>
        <select id="phongban" name="phongban"> <!-- co nhieu su lua chon trong select -->
            <option value="A">Director</option>
            <option value="B">Employee</option>
            <option value="C">Owner</option>
        </select><br>
        <input type="submit" value="Submit"></input>
</body>
</html>

<?php
if(isset($_POST['phongban'])){ // isset kiem tra xem bien phongban co exist khong
    $phongban = $_POST['phongban']; // lay gia tri cua bien phong ban post len
    switch ($phongban) {
        case 'A':
            echo "Ban chon phong ban Director";
            break;
        case 'B':
            echo "Ban chon phong ban Employee";
            break;
        case 'C':
            echo "Ban chon phong ban Owner";
            break;
        default:
            echo "Khong co phong ban nay";
            break;
    }
}else{
    echo "Ban chua chon phong ban";
}

?>