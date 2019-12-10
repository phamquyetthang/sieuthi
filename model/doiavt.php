<?php
session_start();
?>
<html>
<head>
  <meta http-equiv='refresh' content='0.5; URL=http://localhost/sieuthi/controller/posi.php'>
</head>
</html>
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
$idnv=$_SESSION['empid'];
$nguonavt=$_POST['doiavt'];
if(isset($_POST['upanh'])){
    if(isset($_POST['doiavt'])){

    $nguonavt=$_POST['doiavt'];
    $linkavt='library/img/'.$nguonavt;
    $sqldoia="UPDATE nhanvien SET avt='$linkavt' WHERE nhanvien.id= '$idnv'";
    $doiavt=mysqli_query($connect, $sqldoia);
  
}
}
?>