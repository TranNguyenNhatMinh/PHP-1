<?php
// tao cookie don gian
setcookie("username", "AptechUser", time() + 86400); // Cookie sống 1 ngày  
echo "Cookie 'username' đã được tạo.<br>";

// cookie tu huy khi dong trinh duyet
setcookie("sessionUser","temporaryUser");
echo "Session Cookie 'sessionUser' đã được tạo.<br>";

// doc cookie
if(isset($_COOKIE["username"])){
    echo "Welcome" . $_COOKIE["username"];
}else{
    echo "No Cookie Found";
}

// dem so lan truy cap
if(isset($_COOKIE["visit"])){
    $visit = $_COOKIE["visit"]+1;
}else{
    $visit = 1;
    echo "Welcome first time visitor!<br>";
}
setcookie("visits", $visit, time() + 86400);
echo "You have visited $visit time";


// Cookie da tham so
setcookie("user_info", "active", time() + (2*86400), "/Webmap/",".webworldmaps.com");
echo "Cookie with path and domain";


// secure with HTTPS
setcookie("secure_cookie", "secure_value", time() + 86400, "/", "",true); // chi truyen tren ket noi HTTPS
echo "Secure Cookie created.";

// Cookie va form nhap lieu 



?>