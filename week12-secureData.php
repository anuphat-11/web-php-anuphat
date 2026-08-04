<?php
  $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

     try{
           $pdo = new pdo(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
      
        );

            $pdo->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );

        $name = "anuphat";

        $sql ="
        SELECT * FROM student WHERE name = '$name'";
        $stmt = $pdo->query($sql);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo "นักศึกษาที่มีชื่อ" . $name . " มีข้อมูลดังนี้ <br>";
        echo "ID: " . $student['id'] . "<br>";  

     }catch(PDOException $e){
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
?>
