<?php
// welcome.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Giả sử thông tin đúng là admin/password123
    if ($username === "admin" && $password === "password123") {
        // Tạo cookie username tồn tại trong 24 giờ
        setcookie("username", $username, time() + 86400, "/");
        // Khởi tạo cookie visits nếu chưa có
        if (!isset($_COOKIE['visits'])) {
            setcookie("visits", 0, time() + 86400, "/");
        }
        echo "<h2>Welcome, $username!</h2>";
        echo "<p>Cookie 'username' has been created and will expire in 24 hours.</p>";
        echo '<a href="home.php">Go to Home</a>';
    } else {
        echo "<p>Invalid username or password. <a href='login.php'>Try again</a></p>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>
