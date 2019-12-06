<?php
$idemp=$_SESSION['empid'];
$sql = "SELECT * FROM `nhanvien` WHERE id='$idemp'";
$ket_qua = $connect->query($sql);
// $img='';
//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
    // chuyển mảng về 1 phần tử
    $empavt=$row['avt'];
    $empname=$row['accname'];
    $empfull=$row['fullname'];
    $empsdt=$row['sdt'];
    $empemail=$row['email'];
    $empstart=$row['start'];
    $empfini=$row['finish'];
    $empfirst=$row['firstday'];
    $position=$row['position'];
}
//Đóng kết nối database tintuc
// $connect->close();
?>