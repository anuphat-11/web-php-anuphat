<?php
$name = 'อนุภัทร บุตะเขียว';
$role = 'นักพัฒนาเว็บ';
$email = 'anuphat@example.com';
$bio = 'สวัสดีครับ ผมชื่ออนุภัทร บุตะเขียว เป็นนักพัฒนาเว็บ สนใจสร้างเว็บไซต์และแอปพลิเคชันที่ใช้งานง่ายและสวยงาม.';
?>
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>โปรไฟล์ - <?php echo $name; ?></title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; background:#f7f7f7; color:#222; }
    .container { max-width:720px; margin:40px auto; background:#fff; padding:24px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.06); }
    .header { display:flex; gap:16px; align-items:center; }
    .avatar { width:96px; height:96px; border-radius:50%; background:#e0e0e0; display:flex; align-items:center; justify-content:center; font-size:36px; color:#666; }
    h1 { margin:0; font-size:1.5rem; }
    p.role { margin:4px 0 0 0; color:#555; }
    a.email { color:#1a73e8; text-decoration:none; }
    .section { margin-top:18px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="avatar"><?php echo mb_substr($name, 0, 1, 'UTF-8'); ?></div>
      <div>
        <h1><?php echo $name; ?></h1>
        <p class="role"><?php echo $role; ?></p>
        <p><a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
      </div>
    </div>

    <div class="section">
      <h2>เกี่ยวกับ</h2>
      <p><?php echo $bio; ?></p>
    </div>

    <div class="section">
      <h2>ทักษะ</h2>
      <ul>
        <li>HTML / CSS / JavaScript</li>
        <li>PHP & MySQL</li>
        <li>การออกแบบหน้าเว็บที่ตอบสนอง (Responsive)</li>
      </ul>
    </div>
  </div>
</body>
</html>
