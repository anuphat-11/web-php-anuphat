<?php

if($_SERVER["REQUEST_METHOD"]!="POST"){
    die("ไม่สามารถเข้าหน้านี้ได้");
}

$name = trim($_POST["fullname"]);

$file = $_FILES["profile"];

$uploadDir = "uploads/hw/";

if(!is_dir($uploadDir)){
    mkdir($uploadDir,0755,true);
}

/* ============================
   ขั้นตอนที่ 1 ตรวจสอบ Error
============================ */

if($file["error"] !== UPLOAD_ERR_OK){
    die("เกิดข้อผิดพลาดในการอัปโหลด");
}

/* ============================
   ขั้นตอนที่ 2 ตรวจสอบขนาด
============================ */

$maxSize = 2 * 1024 * 1024;

if($file["size"] > $maxSize){
    die("ไฟล์ใหญ่เกิน 2MB");
}

/* ============================
   ขั้นตอนที่ 3 ตรวจสอบ MIME
============================ */

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($file["tmp_name"]);

$allow = [
    "image/jpeg",
    "image/png",
    "image/gif",
    "image/webp"
];

if(!in_array($mime,$allow)){
    die("อนุญาตเฉพาะ JPG PNG GIF WEBP");
}

/* ============================
   ขั้นตอนที่ 4 เปลี่ยนชื่อไฟล์
============================ */

$ext = strtolower(pathinfo($file["name"],PATHINFO_EXTENSION));

$newName = uniqid("img_",true).".".$ext;

$destination = $uploadDir.$newName;

/* ============================
   ขั้นตอนที่ 5 ย้ายไฟล์
============================ */

if(!move_uploaded_file($file["tmp_name"],$destination)){
    die("ย้ายไฟล์ไม่สำเร็จ");
}

?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Show Profile</title>

<style>

body{
    font-family:Arial;
    background:#f5f5f5;
    text-align:center;
}

.card{
    width:350px;
    margin:50px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.2);
}

img{
    width:250px;
    height:250px;
    object-fit:cover;
    border-radius:10px;
    border:3px solid #333;
}

h2{
    margin-top:15px;
}

</style>

</head>

<body>

<div class="card">

<img src="<?php echo htmlspecialchars($destination); ?>">

<h2>
<?php echo htmlspecialchars($name); ?>
</h2>

</div>

</body>
</html>