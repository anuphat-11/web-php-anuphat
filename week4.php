<?php
// ฟังก์ชั่นสำหรับแสดงตารางสูตรคูณ
function multiplicationTable($number) {
    echo "<h3>ตารางสูตรคูณของ $number</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>สูตรคูณ</th><th>ผลลัพธ์</th></tr>";
    
    for ($i = 1; $i <= 12; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number × $i</td><td>$result</td></tr>";
    }
    
    echo "</table>";
}

// ฟังก์ชั่นสำหรับบวกเลข 2 ตัว
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรม PHP - สูตรคูณและการบวก</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            border-bottom: 3px solid #4CAF50;
            padding-bottom: 10px;
        }
        .section {
            margin: 30px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 5px solid #4CAF50;
            border-radius: 5px;
        }
        .section h2 {
            color: #4CAF50;
            margin-top: 0;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            max-width: 300px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: fit-content;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f5e9;
            border: 2px solid #4CAF50;
            border-radius: 5px;
        }
        table {
            width: 100%;
            max-width: 500px;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: center;
        }
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .result-text {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔢 โปรแกรม PHP - สูตรคูณและการบวก</h1>
        
        <!-- ส่วนที่ 1: ตารางสูตรคูณ -->
        <div class="section">
            <h2>1️⃣ ตารางสูตรคูณ</h2>
            <form method="POST">
                <label for="table_number">ป้อนตัวเลข (1-12):</label>
                <input type="number" id="table_number" name="table_number" min="1" max="12" placeholder="เช่น 5">
                <button type="submit" name="action" value="multiplication">แสดงตารางสูตรคูณ</button>
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "multiplication") {
                if (isset($_POST["table_number"]) && $_POST["table_number"] != "") {
                    $number = intval($_POST["table_number"]);
                    if ($number >= 1 && $number <= 12) {
                        echo "<div class='result'>";
                        multiplicationTable($number);
                        echo "</div>";
                    } else {
                        echo "<div class='result'><p style='color: #d32f2f;'>❌ กรุณาป้อนตัวเลขระหว่าง 1-12</p></div>";
                    }
                } else {
                    echo "<div class='result'><p style='color: #d32f2f;'>❌ กรุณาป้อนตัวเลข</p></div>";
                }
            }
            ?>
        </div>
        
        <!-- ส่วนที่ 2: การบวกเลข 2 ตัว -->
        <div class="section">
            <h2>2️⃣ บวกเลข 2 ตัว</h2>
            <form method="POST">
                <label for="num1">ป้อนตัวเลขตัวที่ 1:</label>
                <input type="number" id="num1" name="num1" placeholder="เช่น 10" step="0.01">
                
                <label for="num2">ป้อนตัวเลขตัวที่ 2:</label>
                <input type="number" id="num2" name="num2" placeholder="เช่น 20" step="0.01">
                
                <button type="submit" name="action" value="addition">บวกเลข</button>
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "addition") {
                if (isset($_POST["num1"]) && isset($_POST["num2"]) && $_POST["num1"] != "" && $_POST["num2"] != "") {
                    $num1 = floatval($_POST["num1"]);
                    $num2 = floatval($_POST["num2"]);
                    $sum = addNumbers($num1, $num2);
                    echo "<div class='result'>";
                    echo "<p class='result-text'>✅ <strong>$num1</strong> + <strong>$num2</strong> = <strong style='color: #4CAF50; font-size: 24px;'>$sum</strong></p>";
                    echo "</div>";
                } else {
                    echo "<div class='result'><p style='color: #d32f2f;'>❌ กรุณาป้อนตัวเลขทั้งสองตัว</p></div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
