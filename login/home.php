<?php
// home.php

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];

    // Xử lý visits cookie
    if (isset($_COOKIE['visits'])) {
        $visits = $_COOKIE['visits'] + 1;
    } else {
        $visits = 1;
    }
    setcookie('visits', $visits, time() + 86400, "/"); // Cập nhật visits cookie

    echo "<h2>Welcome back, $username!</h2>";
    echo "<p>You have visited this page $visits time(s).</p>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "<p>You are not logged in. Please <a href='login.php'>login here</a>.</p>";
}
?>
