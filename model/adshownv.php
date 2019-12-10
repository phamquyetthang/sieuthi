<?php
require_once ("connect.php");
$sqlshowsp="SELECT * FROM sanpham WHERE 1 ORDER BY id DESC";
$showsp=$connect->query($sqlshowsp);
while($rowsps=$showsp->fetch_array(MYSQLI_ASSOC)){
    $idsps=$rowsps['id'];
    $spnames=$rowsps['name'];
    $spgiaban=$rowsps['giaban'];
    $spgiamgia=$rowsps['giamgia'];
    $spmota=$rowsps['mota'];
    $spimg=$rowsps['img'];
    echo ('
    <div class="shownv">
    <p class="STT">'.$idsps.'</p>
    <div>'.$spnames.'</div>
    <div>'.$spgiaban.'</div>
    <div>'.$spgiamgia.'</div>
    <p class="motasp">'.$spmota.'</p>
    <img class="imgmh"  src="'.$spimg.'" alt="ảnh sp"></img>
    <p class="suaxoa">
    <a href="model/editsp.php?id='.$idsps.'">Sửa</a>
    <a href="model/deletesp.php?id='.$idsps.'">Xóa</a>
    </p>  
    </div>
    ');
}
?>