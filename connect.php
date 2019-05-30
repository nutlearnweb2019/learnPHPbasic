<?php 
    // echo "<h1>My First PHP</h1>";
    // ECHO "<br>";
    // echo "My First PHP";

    error_reporting(E_ALL); //เปิด error ทุกอย่างให้ขึ้นเตือน *ควรเปิดไว้เสมอ*
    // error_reporting(0); //ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง

    // การเชื่อมต่อฐานข้อมูล (Connect Database)
    // คำสั่งที่ 1 ('ชื่อโฮสต์','root','รหัส *ถ้าใช้ Xampp ไม่ต้องใส่เพราะเป็นค่าว่าง*','ชื่อฐานข้อมูล');  --> ไปสร้างฐานข้อมูล เลือก utf8_general_ci
        $conn = new mysqli('localhost','root','','shop'); 
    
    // คำสั่งที่ 2 การตั้งค่า Project และ Database ให้รองรับภาษาไทย
        $conn->set_charset('utf8');
    

    // // การตรวจสอบว่าเราสามารถเชื่อมต่อฐานข้อมูลได้หรือไม่ *อย่างง่าย*
    // if (true) {
    //     echo "Connected";   //ได้ หน้าเว็บแสดงคำว่า Connected
    //     }
    // else {
    //     echo "Not Connect";   //ไม่ได้ หน้าเว็บแสดงคำว่า Not Connect
    // }

    // การตรวจสอบว่าเราสามารถเชื่อมต่อฐานข้อมูลได้หรือไม่ *แสดง Error เมื่อผิด/เมื่อถูกต้องจะไม่แสดงอะไร*
    // บันทึกคำสั่ง 
    // *เป็นตัวเลขของ error code* 
    //     echo $conn->connect_errno;
    // *เป็น error message*
    //     echo $conn->connect_error;
        
            if($conn->connect_errno) {
                echo "Connect Error : ".$conn->connect_error;
                exit();  //ถ้ามี error จะไม่ทำงานคำสั่งที่อยู่ถัดไปและหยุดการทำงาน
            }
?>