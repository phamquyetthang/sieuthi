<?php
$idemp=$_SESSION['empid'];
$sql = "SELECT * ,TIME_TO_SEC(TIMEDIFF(CURRENT_TIMESTAMP(), firstday)) AS nc
FROM `nhanvien` WHERE id='$idemp'";
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
    $salary=$row['salary'];
    $timeword=$row['nc'];
    (int)$dayword=$timeword/86400;
    $thunhap=$salary*(int)$dayword;
    if($position==1){
        $chucvu="Nhân viên";
    }else{
        $chucvu="Quản lý";
    }
}
//Đóng kết nối database tintuc
// $connect->close();
?>