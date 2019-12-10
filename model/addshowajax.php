<?php
require_once ("connect.php");
$sqlshownv="SELECT * FROM nhanvien WHERE 1";
$shownv=$connect->query($sqlshownv);
while($rownvs=$shownv->fetch_array(MYSQLI_ASSOC)){
    $idnvs=$rownvs['id'];
    $nvaccs=$rownvs['accname'];
    $nvfulls=$rownvs['fullname'];
    $nvsdts=$rownvs['sdt'];
    $nvemail=$rownvs['email'];
    $nvstart=$rownvs['start'];
    $nvfin=$rownvs['finish'];
    $nvfirst=$rownvs['firstday'];
    $nvsala=$rownvs['salary'];
    echo ('<div class="shownv">
    <p class="STT">'.$idnvs.'</p>
    <div>'.$nvfulls.'</div>
    <div>'.$nvsdts.'</div>
    <div>'.$nvemail.'</div>
    <div>'.$nvfirst.'</div>
    <div>'.$nvstart.'->'.$nvfin.'</div>
    <div>'.$nvsala.'</div>
    <p class="suaxoa">
        <a href="model/editnv.php?id='.$idnvs.'">Sửa</a>
        <a href="model/delete.php?id='.$idnvs.'">Xóa</a>
    </p>
    
</div>
    ');
}
?>