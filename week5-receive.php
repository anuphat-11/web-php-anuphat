<?php
    $name = $_GET['userName'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $number = $_GET['userAge'];
    $birth = $_GET['userBirthday'];
    $gender = $_GET['UserGender'];
    $city = $_GET['userCity'];
    $hobby = $_GET['userHobby'];
    $msg = $_GET['userMsg'];


    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $number<br>";
    echo "วันเกิดของคุณคือ: $birth<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $hobby) . "<br>";
    echo "ความคิดเห็นของคุณคือ: $msg<br>";

?>