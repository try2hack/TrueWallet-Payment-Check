<?php
//ให้ใส่เบอร์โทรศัพท์ ของ Truemoney Wallet
$twusername = "TrueWallet Tel";
//ให้ใส่ PIN Code ของ Truemoney Wallet
$twpassword = "TrueWallet PIN Code";
//ให้ใส่ Reference Token, หาได้จากการรันไฟล์ inc/gettoken.php
$twreference = "TrueWallet Reference";

//Database ส่วนของการเชื่อมต่อฐานข้อมูล

//Host ของฐานข้อมูล
$dbhost = "Your hostname/IP";
//Username ของฐานข้อมูล
$dbuser = "Your database username";
//Password ของฐานข้อมูล
$dbpassword = "Your database password";
//ฐานข้อมูล
$dbname = "Your database name";
//Database ส่วนของตารางในการเพิ่มพ้อยให้กับลูกค้า
//ตารางของพ้อยที่ถูกเก็บ
$tbname = "";
//Field ที่ใช้อ้างอิง Username
$field_username = "";
//Field ที่ใช้ในการเก็บพ้อยจากการเติมเงิน
$point_field_name = "";

//จำนวน เงินเติมคูณด้วยเลขที่ต้องการ (เช่น เงินเติม 50 บาท x 1 = 50 บาท)
$wallet_x = "1";
?>
