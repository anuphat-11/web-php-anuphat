<?php
session_start();

if (isset($_SESSION["username"])) {

    echo "<h2>ยินดีต้อนรับ " . $_SESSION["username"] . "</h2>";

} elseif (isset($_COOKIE["username"])) {

    $_SESSION["username"] = $_COOKIE["username"];

    echo "<h2>ยินดีต้อนรับ " . $_SESSION["username"] . "</h2>";

} else {

    echo "<h2>โปรดล็อคอิน</h2>";
    echo "<a href='week8-hw-login.php'>Login</a>";

}
?>