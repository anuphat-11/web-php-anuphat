<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มสมัครงาน</title>
</head>
<body>

    <h2>แบบฟอร์มสมัครงาน</h2>

    <form action="registeration-accept.php" method="POST">

        <p>
            ชื่อ-นามสกุล:
            <input type="text" name="fullname" required>
        </p>

        <p>
            อีเมล:
            <input type="email" name="email" required>
        </p>

        <p>
            เบอร์โทรศัพท์:
            <input type="tel" name="phone" required>
        </p>

        <p>
            รหัสผ่าน:
            <input type="password" name="password" required>
        </p>

        <p>
            เงินเดือนที่คาดหวัง:
            <input type="number" name="salary" required>
        </p>

        <p>
            วันที่เริ่มงานได้:
            <input type="date" name="startdate" required>
        </p>

        <p>
            เพศ:
            <input type="radio" name="gender" value="ชาย" required> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง
            <input type="radio" name="gender" value="อื่น ๆ"> อื่น ๆ
        </p>

        <p>
            ตำแหน่งที่สนใจ:
            <select name="position">
                <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
                <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                <option value="การตลาด">การตลาด</option>
            </select>
        </p>

        <p>
            ทักษะความสามารถ:
            <br>
            <input type="checkbox" name="skills[]" value="PHP"> PHP
            <input type="checkbox" name="skills[]" value="HTML"> HTML
            <input type="checkbox" name="skills[]" value="CSS"> CSS
            <input type="checkbox" name="skills[]" value="SQL"> SQL
        </p>

        <p>
            แนะนำตัวเพิ่มเติม:
            <br>
            <textarea name="about" rows="5" cols="50"></textarea>
        </p>

        <p>
            <input type="submit" value="ส่งใบสมัคร">
            <input type="reset" value="ล้างข้อมูล">
        </p>

    </form>

</body>
</html>