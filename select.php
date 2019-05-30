<?php 

    require_once('connect.php');

    // การเลือก/เรียกดูข้อมูลทั้งหมดจาก Database *phpMyAdmin -> fruit*
    
    // เลือกทั้งหมดจากตาราง fruit มาแสดงผล
    $sql = "SELECT * FROM `fruit`";
    
    // เลือกทั้งหมดจากตาราง fruit โดยมีเงื่อนไขว่า category ต้องเป็น ทุเรียน
    // $sql = "SELECT * FROM `fruit` WHERE category = 'ทุเรียน'";
    
    $result = $conn->query($sql) or die($conn->error); // or die($conn->error); ตรวจสอบการดึงข้อมูลว่ามี Error หรือไม่

    // echo '<pre>',print_r($result),'</pre>';     //แสดง result Object ว่ามีอะไรบ้าง *ไม่ได้ใช้*

    //คำสั่ง MySQLi_Result::fetch_assoc() ข้อมูลที่ได้จะเป็น associative array *ได้ Key กับ Vaules มาตรงๆ*
        // $row = $result->fetch_assoc();
        //     echo '<pre>',print_r($row),'</pre>';
        //     //การเข้าถึงข้อมูล
        //     echo $row['category'];

        // ตรวจสอบว่าใน Database *phpMyAdmin -> fruit* มีข้อมูลอยู่หรือไม่
        if($result->num_rows > 0) {
            // ถ้ามี :: การวนลูปข้อมูลใน Database *phpMyAdmin -> fruit* ออกมาแสดงผลบนหน้าเว็บ
                while($row = $result->fetch_assoc()) {
                    echo $row['category'].': ';
                    echo $row['type'].': ';
                    echo $row['amount'].'<br>';
                }
                echo '<br>มีผลไม้ทั้งหมด '.$result->num_rows.' ชนิด';     //num_rows ใช้นับข้อมูลทั้งหมดที่ fetch ออกมาแสดงผล
        }
        else {
                echo "Data Not Found.";     //ถ้าไม่มี หน้าเว็บแสดงคำว่า Data Not Found.
        }
        
?>