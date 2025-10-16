<?php
// logout.php

// Xóa cookies bằng cách đặt thời gian hết hạn về quá khứ
setcookie("username", "", time() - 3600, "/");
setcookie("visits", "", time() - 3600, "/");

echo "<h2>You have been logged out successfully.</h2>";
echo '<a href="login.php">Login again</a>';
?>
