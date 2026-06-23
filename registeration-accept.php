<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ผลการสมัครงาน</title>
</head>
<body>

    <h2>ข้อมูลใบสมัครงาน</h2>

    <?php

    $fullname  = $_POST['fullname'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $password  = $_POST['password'];
    $salary    = $_POST['salary'];
    $startdate = $_POST['startdate'];
    $gender    = $_POST['gender'];
    $position  = $_POST['position'];
    $about     = $_POST['about'];

    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "ไม่มี";

    echo "ชื่อผู้สมัคร: " . $fullname . "<br>";
    echo "อีเมล: " . $email . "<br>";
    echo "เบอร์โทรศัพท์: " . $phone . "<br>";
    echo "รหัสผ่าน: " . $password . "<br>";
    echo "เงินเดือนที่คาดหวัง: " . $salary . "<br>";
    echo "วันที่เริ่มงานได้: " . $startdate . "<br>";
    echo "เพศ: " . $gender . "<br>";
    echo "ตำแหน่งที่สนใจ: " . $position . "<br>";
    echo "ทักษะความสามารถ: " . $skills . "<br>";
    echo "แนะนำตัวเพิ่มเติม: " . $about . "<br>";

    ?>

</body>
</html>