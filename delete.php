<?php

    require_once('connect.php');

    $id = $_GET['id'];
    
    // คำสั่ง isset($ตัวแปร) เอาไว้ตรวจสอบว่า ตัวแปรตัวนี้ได้เกิดขึ้นหรือยัง
    if(isset($id)){
        $sql = "DELETE FROM `fruit` WHERE `fruit`.`id` = '".$id."' ";     
        $result = $conn->query($sql);     //ถ้าตัวแปรมีจริง ให้ทำการลบข้อมูล

            // ตรวจสอบว่า การเปลี่ยนแปลง(ลบ)ข้อมูลใน Database *phpMyAdmin -> fruit* ทำสำเร็จหรือไม่
            if($conn->affected_rows){
                echo "Data Deleted.";     //ลบสำเร็จ แสดงข้อความ Data Deleted.
            }
            else {
                echo "No Data To Delete.";   //ลบไม่สำเร็จ(ไม่มีข้อมูลให้ลบ) แสดงข้อความ No Data To Delete.
            }
    }
    else{
        echo "No ID To Delete.";     //ถ้าตัวแปรไม่มีจริง ให้แสดงข้อความ No ID To Delete.
    }


?>