<?php
$server = "localhost";
$username = "anyone"; // Khai báo username
$password = "baanhem";// Khai báo password
$dbname = "sieuthi";      // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
?>