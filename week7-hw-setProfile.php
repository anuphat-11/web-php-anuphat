<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Set Profile</title>
<style>
body{
    font-family:Arial;
    background:#f5f5f5;
}
.container{
    width:400px;
    margin:50px auto;
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.2);
}
input{
    width:100%;
    padding:10px;
    margin:10px 0;
}
button{
    width:100%;
    padding:10px;
}
</style>
</head>
<body>

<div class="container">
<h2>กรอกข้อมูลโปรไฟล์</h2>

<form action="week7-hw-showProfile.php"
      method="post"
      enctype="multipart/form-data">

<label>ชื่อ</label>
<input type="text" name="fullname" required>

<label>เลือกรูปภาพ</label>
<input type="file" name="profile" accept="image/*" required>

<button type="submit">บันทึก</button>

</form>

</div>

</body>
</html>