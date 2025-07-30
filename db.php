

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "my_website";  // เปลี่ยนตามชื่อฐานข้อมูลจริง

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

