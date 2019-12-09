<?php
session_start();
require_once ("connect.php");
$idnv=$_SESSION['empid'];

$sqlhissale="SELECT banhang.id,banhang.id_sp, banhang.time, banhang.money,
banhang.soluong, sanpham.name 
FROM `banhang` 
INNER JOIN sanpham ON banhang.id_sp=sanpham.id 
WHERE banhang.id_nv='$idnv' ORDER BY `banhang`.`id` DESC
";
$hissale=$connect->query($sqlhissale);
while($rowhsale=$hissale->fetch_array(MYSQLI_ASSOC)){
    $idhsale=$rowhsale['id'];
    $id_sphsale=$rowhsale['id_sp'];
    $name_hsale=$rowhsale['name'];
    $time_hsale=$rowhsale['time'];
    $sl_hsale=$rowhsale['soluong'];
    $mn_hsale=$rowhsale['money'];

    echo ('<div class="banghis">
    <div>'.$idhsale.'</div><div>'.$id_sphsale.'</div>
    <div>'.$name_hsale.'</div>
    <div>'.$sl_hsale.'</div>
    <div>'.$mn_hsale.'</div>
    <div>'.$time_hsale.'</div>
        </div>
    ');
}
?>