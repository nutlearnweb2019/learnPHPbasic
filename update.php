<?php

    require_once("connect.php");

    // แบบที่ 1 
    // $sql = "UPDATE `fruit` SET `type` = 'อกร่องทอง' WHERE `fruit`.`id` = 5";
    // $result = $conn->query($sql);

    //แบบที่ 2 
    $id = $_GET['id'];
    $category = "ลำไย";
    $type = "กะโหลก";
    $amount = 100;

    // คำสั่ง isset($ตัวแปร) เอาไว้ตรวจสอบว่า ตัวแปรตัวนี้ได้เกิดขึ้นหรือยัง   
    if(isset($id)) {
        $sql = "UPDATE `fruit` SET `category` = '".$category."', 
                        `type` = '".$type."', 
                        `amount` = '".$amount."' 
                    WHERE `fruit`.`id` = '".$id."' ";
        
        $result = $conn->query($sql);    //ถ้าตัวแปรมีจริง ให้ทำการอัพเดทข้อมูล
    
            // ตรวจสอบว่า $result มีการอัพเดทข้อมูลจริงหรือไม่
            if($result){
                echo "Update Success.";     //จริง แสดงข้อความ Update Success.
            }
            else{
                echo "Update Fail.";     //ไม่จริง แสดงข้อความ Update Fail.
            }   
    }
    else{
        echo "No Data To Update.";     //ถ้าตัวแปรไม่มีจริง ให้แสดงข้อความ No Data To Update.
    }
    
?>

<!-- การเขียน Query String บน Url ใช้คำสั่งต่อท้าย Url: ?id=เลขไอดีที่ต้องการเข้าถึง เช่น 
http://localhost/php_web/ep_24/update.php?id=4 -->

<!-- วิธีการกดเครื่องหมาย ` คือ กดปุ่ม Alt ค้างไว้ แล้วกดปุ่มเลข 9 กับ 6 แบบเร็วๆ แต่ไม่พร้อมกัน  -->
