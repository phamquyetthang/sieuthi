<?php
session_start();
require_once ("connect.php");
$idnv=$_SESSION['empid'];
$sqlhisreturn="SELECT trahang.id, trahang.id_sp, trahang.lydo, trahang.id_ban,
trahang.time, sanpham.name,trahang.soluong
FROM trahang INNER JOIN sanpham ON trahang.id_sp=sanpham.id
WHERE trahang.id_nv='$idnv' ORDER BY trahang.id DESC";
$hisreturn=$connect->query($sqlhisreturn);
while($rowhreturn=$hisreturn->fetch_array(MYSQLI_ASSOC)){
    $idhreturn=$rowhreturn['id'];
    $id_bhreturn=$rowhreturn['id_ban'];
    $name_hreturn=$rowhreturn['name'];
    $time_hreturn=$rowhreturn['time'];
    $sl_hreturn=$rowhreturn['soluong'];
    $ld_hreturn=$rowhreturn['lydo'];

    echo ('<div class="banghis">
    <div>'.$idhreturn.'</div><div>'.$id_bhreturn.'</div>
    <div>'.$name_hreturn.'</div>
    <div>'.$sl_hreturn.'</div>
    <div>'.$ld_hreturn.'</div>
    <div>'.$time_hreturn.'</div>
    </div>
');
}
?>