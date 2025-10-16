<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
    setcookie("uname", $uname, time() + (86400 * 7)); // sống 7 ngày
    echo "Welcome " . $uname;
} else {
    if (isset($_COOKIE["uname"])) {
        echo "Welcome back " . $_COOKIE["uname"];
    } else {
?>
    <form method="POST" action="">
        Nhập tên: <input type="text" name="uname">
        <input type="submit" value="Submit">
    </form>
<?php
    }
}
// nghia la gui thong tin len sever con neu chua co cookie thi hien form de nhap du lieu
?>
