<?php

    // include('connect.php');          //เป็นแค่การดึงไฟล์เข้ามาใช้งานร่วมกันเฉยๆ ไม่แจ้ง Error แต่แจ้ง Warning ซึ่งไม่มีผลกระทบอะไรกับโปรแกรม 
    // include_once('connect.php');     //--------------------------------แต่จะดึงมาครั้งเดียว
    // require('connect.php');          //ไฟล์ที่จะดึงเข้ามาใช้งานร่วมกันต้องมีอยู่จริง ถ้าไม่มีจริงต้องไปสร้าง มิฉะนั้นจะส่งผลกระทบกับโปรแกรม *Error*
    // require_once('connect.php');     //--------------------------------แต่จะดึงมาครั้งเดียว

    require_once('connect.php');

    // การเพิ่มข้อมูลเข้า Database *phpMyAdmin -> fruit*
    // INSERT INTO `fruit` (`id`, `category`, `type`, `amount`) VALUES (NULL, 'ทุเรียน', 'หมอนทอง', '20');  //ทำการเพิ่มข้อมูลใน phpMyAdmin แล้วนำโค้ดมาใช้
    
    // แบบที่ 1 
    // $sql = "INSERT INTO `fruit` (`category`, `type`, `amount`) VALUES ('ทุเรียน', 'ก้านยาว', '10')";
    // $result = $conn->query($sql);

    //แบบที่ 2 
    $categoty = "มะม่วง";
    $type = "อกร่อง";
    $amount = 50;
    $sql = "INSERT INTO `fruit` (`category`, `type`, `amount`) VALUES ('".$categoty."' , '".$type."' , '".$amount."' )";
    $result = $conn->query($sql);
        
    // ตรวจสอบสถานะการนำข้อมูลเข้า Database *phpMyAdmin -> fruit*
        if($result) {
            echo "Input Success";   //ได้ หน้าเว็บแสดงคำว่า Input Success
        }
        else {
            echo "Input Fail !";    //ไม่ได้ หน้าเว็บแสดงคำว่า Not Connect
        }

?>