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

        $sql = "
           INSERT INTO students(name, email, age) 
           VALUES ('สัณห์ สังขพงศ์', 'sun@gmail.com', 19 )
        ";

        $pdo->exec($sql);
        echo "เพิ่มข้อมูลสำเร็จ";

        }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>