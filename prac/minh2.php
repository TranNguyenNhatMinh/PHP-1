<?php
    $name = 'Tran Nguyen Nhat Minh';
    $age = 20;
    $diachi = 'Ha Noi';
    $email = "nhatminh@gmail.com";
    $phone = "0378912665";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Thông Tin Sinh Viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 69%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $age ?></td>
            <td><?php echo $diachi ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $phone ?></td>
        </tr>
    </table>
</body>
</html>