<?php
require_once ("connect.php");

$method=$_POST['method'];
$tensp=$_POST['tensp'];
$giabansp=$_POST['giabansp'];
$giamgiasp=$_POST['giamgiasp'];
$motasp=$_POST['motasp'];
$amhsp=$_POST['amhsp'];
$img=$amhsp;

$sqladdsp="INSERT INTO `sanpham` (`name`, `img`, `giaban`, `giamgia`, `mota`) 
            VALUES ('$tensp', '$img','$giabansp', '$giamgiasp', '$motasp');";

$addsp=mysqli_query($connect, $sqladdsp);
if($addsp){
    echo('<div>
    <span>Tên sản phẩm:</span><br>
    <input type="text" name="tensp" id="tensp">
</div>
<div >
    <span>Giá bán:</span><br>
    <input type="text" name="giabansp" id="giabansp">
</div>
<div>
    <span>Giảm giá:</span><br>
    <input type="text" name="giamgiasp" id="giamgiasp">
</div>
<div>
    <span>Mô tả:</span><br>
    <input type="text" name="motasp" id="motasp">
</div>
<div>
    <span>Ảnh minh họa:</span><br>
    <input type="file" name="amhsp" id="amhsp">
</div>');
}
?>