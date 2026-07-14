<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "admin" && $password == "admin1234") {

    $_SESSION["username"] = $username;

    // ถ้าเลือก Remember Me
    if (isset($_POST["remember"])) {
        setcookie("username", $username, time() + 3600, "/");
    }

    echo "<h2>ล็อคอินสำเร็จ</h2>";
    echo "<a href='week8-hw-dashboard.php'>ไปยัง Dashboard</a>";

} else {

    echo "<h2>ล็อคอินไม่สำเร็จ</h2>";
    echo "<a href='week8-hw-login.php'>กลับไป Login</a>";

}
?>