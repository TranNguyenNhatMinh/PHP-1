
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" > <!-- get: truyen du lieu len url, post: khong hien tren url -->
        <label for="ten">Ten</label>
        <input type="text" id="ten" name="ten" required><br>
        <label for="tuoi">Tuoi</label>
        <input type="number" id="tuoi" name="tuoi" required><br>
        <input type="submit" value="Submit"></input>
    </form>
</body>
</html>

<?php
if(isset($_GET["ten"]) && $_GET["tuoi"]) { // isset kiem tra xem 2 bien ten va tuoi co exist khong
    $ten = htmlspecialchars($_GET["ten"]); // htmlspecialchars: chuyen doi cac ky tu dac biet thanh cac thang binh thuong
    $tuoi = (int)$_GET["tuoi"]; // (int): ep kieu ve so nguyen
    echo "Ten: $ten <br>";
    echo "Tuoi: $tuoi <br>";
}else {
    echo "Khong co du lieu";
}
?>