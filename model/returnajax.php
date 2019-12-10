<?php
session_start();
require_once ("connect.php");
$idnv=$_SESSION['empid'];
$reme=$_POST['reme'];
// echo($reme);
$madonhang=$_POST['madonhang'];
$sldonhang=$_POST['sldonhang'];

if($reme==="checkbill"){
    if($madonhang!=NULL){
        $sqlrt="SELECT *,sanpham.img FROM `banhang` 
                INNER JOIN sanpham ON banhang.id_sp=sanpham.id WHERE banhang.id='$madonhang' ";
        $ttreturn=$connect->query($sqlrt);

        $rowrt=$ttreturn->fetch_array(MYSQLI_ASSOC);
        $tensp=$rowrt['name'];
        $slmua=$rowrt['soluong'];
        $timemua=$rowrt['time'];
        $giaban=$rowrt['giaban'];
        $giamgia=$rowrt['giamgia'];
        $money=$rowrt['money'];
        $img=$rowrt['img'];
        if($sldonhang!=NULL&&$sldonhang<=$slmua){
            $tientra= $sldonhang*($giaban-$giamgia);
            echo('
        <div>
                    <span>Mã đơn hàng:</span>
                    <div id="mdhht">'.$madonhang.'</div>
                </div>
                <div >
                    <span>Sản phẩm:</span>
                    <div id="idspht">'.$tensp.'</div>
                </div>
                <div>
                    <span>Số lượng khi mua:</span>
                    <div id="slht">'.$slmua.'</div>
                </div>
                <div>
                    <span>Thời điểm mua hàng:</span>
                    <div id="timedh">'.$timemua.'</div>
                </div>
                <div >
                    <span>Số tiền đã thanh toán:</span>
                    <div id="moneyht">'.$money.'</div>
                </div>
                <img src="'.$img.'" alt="ảnh hàng hóa">
                <div id="sotientralai">
                    <span>Số tiền hoàn lại:</span>
                    <div id="sotienhl">'.$tientra.'</div>
                </div>
        ');
        }else{
            $tientra= $sldonhang*($giaban-$giamgia);
            echo('
            <div>
            <span>Mã đơn hàng:</span>
            <div id="mdhht">Hãy nhập</div>
        </div>
        <div >
            <span>Sản phẩm:</span>
            <div id="idspht">Đúng</div>
        </div>
        <div>
            <span>Số lượng khi mua:</span>
            <div id="slht">Hoặc</div>
        </div>
        <div>
            <span>Thời điểm mua hàng:</span>
            <div id="timedh">Nhỏ hơn</div>
        </div>
        <div >
            <span>Số tiền đã thanh toán:</span>
            <div id="moneyht">Số lượng mua</div>
        </div>
        <img src="'.$img.'" alt="ảnh hàng hóa">
        <div id="sotientralai">
            <span>Số tiền hoàn lại:</span>
            <div id="sotienhl"></div>
        </div>
            ');
        }
        
}
}else if($reme==='addreturn'){
    $sldonhang=$_POST['sldonhang'];
    $lydo=$_POST['lydo'];
    $sqlrt="SELECT *,sanpham.img,sanpham.id AS idsp 
    FROM `banhang` 
    INNER JOIN sanpham ON banhang.id_sp=sanpham.id WHERE banhang.id='$madonhang' ";
    $ttreturn=$connect->query($sqlrt);

    $rowrt=$ttreturn->fetch_array(MYSQLI_ASSOC);
    $tensp=$rowrt['name'];
    $slmua=$rowrt['soluong'];
    $timemua=$rowrt['time'];
    $giaban=$rowrt['giaban'];
    $giamgia=$rowrt['giamgia'];
    $money=$rowrt['money'];
    $img=$rowrt['img'];
    $idsp=$rowrt['idsp'];
    $tientra= $sldonhang*($giaban-$giamgia);
    $conlai=$money-$tientra;
    // if($lydo==NULL){
        if($sldonhang===$slmua){
            $sqldele="DELETE FROM `banhang` WHERE `banhang`.`id` = '$madonhang'";
            $retval = mysqli_query($connect, $sqldele);

            $sqladdre="INSERT INTO `trahang`(`id_sp`,`lydo`, `id_ban`, `id_nv`, soluong) 
            VALUES ('$idsp', '$lydo','$madonhang','$idnv','$sldonhang')";
            mysqli_query($connect,$sqladdre);
        }
        if($sldonhang<$slmua){
            $sqldele="UPDATE banhang SET soluong='$sldonhang', money='$conlai' WHERE banhang.id= '$madonhang'";
            $retval = mysqli_query($connect, $sqldele);

            $sqladdre="INSERT INTO `trahang`(`id_sp`,`lydo`, `id_ban`, `id_nv`, soluong) 
            VALUES ('$idsp', '$lydo','$madonhang','$idnv','$sldonhang')";
            mysqli_query($connect,$sqladdre);
        }

    // }
}
