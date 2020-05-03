<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('conndb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$obj = new MYSQ;
$obj->connee();
$member_id = $_REQUEST["ID"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM tbl_member WHERE member_id='$member_id' ";
$obj->J_delete($sql);

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($obj) {
    echo "<script type='text/javascript'>";
    echo "alert('ลบเสร็จสิ้น');";
    echo "window.location = 'member.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}
?>