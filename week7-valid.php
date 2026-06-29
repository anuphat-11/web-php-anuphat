<?php
$mial = "123@aaa.com";
$age = 20;

if (filter_var($mial, FILTER_VALIDATE_EMAIL)) {
    echo "อีเมลถูกต้อง". "<br>";
} else {
    echo "อีเมลไม่ถูกต้อง". "<br>";
}

IF (filter_var($age, FILTER_VALIDATE_INT)) {
    echo "อายุถูกต้อง". "<br>";
} else {
    echo "อายุไม่ถูกต้อง". "<br>";
}
?>