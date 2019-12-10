<?php
require_once ("connect.php");

$method=$_POST['method'];
$tenuser=$_POST['tenuser'];
$tennhanvien=$_POST['tennhanvien'];
$sdtuser=$_POST['sdtuser'];
$startuser=$_POST['startuser'];
$posiuser=$_POST['posiuser'];
$pwuser=$_POST['pwuser'];
$emailuser=$_POST['emailuser'];
$finuser=$_POST['finuser'];
$salauser=$_POST['salauser'];
$sqladdnv="INSERT INTO `nhanvien` (`accname`, `fullname`, `sdt`, `email`, `password`, `start`, `finish`, `position`, `salary`) 
            VALUES ('$tenuser', '$tennhanvien','$sdtuser', '$emailuser', '$pwuser', '$startuser', '$finuser', '$posiuser', '$salauser');";

$addnv=mysqli_query($connect,  $sqladdnv);
if($addnv){
    echo('<div>
    <span>Tên tài khoản:</span><br>
    <input type="text" name="tenuser" id="tenuser">
</div>
<div >
    <span>Tên nhân viên:</span><br>
    <input type="text" name="tennhanvien" id="tennhanvien">
</div>
<div>
    <span>Số điện thoại:</span><br>
    <input type="text" name="sdtuser" id="sdtuser">
</div>
<div>
    <span>Bắt đầu ca làm:</span><br>
    <input list="startuser" name="startuser" id="startuser">
    <datalist id="startuser">
        <option value="07:00:00"></option>
        <option value="12:00:00"></option>
        <option value="18:00:00"></option>
    </datalist> 
</div>
<div >
    <span>Chức vụ:</span><br>
    <!-- <input type="text" name="posiuser" id="posiuser"> -->
    <input list="posiuser" name="posiuser" id="posiuser">
    <datalist id="posiuser">
        <option value="1">Nhân viên</option>
        <option value="2">Quản lý</option>
    </datalist> 
</div>
<div>
    <span>Mật khẩu:</span><br>
    <input type="password" name="pwuser" id="pwuser">
</div>
<div>
    <span>Xác nhận mật khẩu:</span><br>
    <input type="password" name="pwagain" id="pwagain">
</div>
<div >
    <span>Địa chỉ email:</span><br>
    <input type="email" name="emailuser" id="emailuser">
</div>
<div>
    <span>Kết thúc ca làm:</span><br>
    <input list="finuser" name="finuser" id="finuser">
    <datalist id="finuser">
        <option value="12:00:00"></option>
        <option value="18:00:00"></option>
        <option value="23:00:00"></option>
    </datalist> 
</div>
<div >
    <span>Mức lương:</span><br>
    <input type="text" name="salauser" id="salauser">
</div>');
}
?>