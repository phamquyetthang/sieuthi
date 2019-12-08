<?php
session_start();
require_once ("connect.php");
$idnv=$_SESSION['empid'];
$method=$_POST['method'];
if($method==='check'){
    if($_POST['ipmsp']!=NULL&&$_POST['tkd']!=NULL){
        $ipmsp=$_POST['ipmsp'];
        $ipsl=$_POST['ipsl'];
        $tkd=$_POST['tkd'];
        
        $sqllaysp="SELECT * FROM `sanpham` WHERE id=$ipmsp";
        $laysp=$connect->query($sqllaysp);
        $rowsp=$laysp->fetch_array(MYSQLI_ASSOC);
        $idsp=$rowsp['id'];
        $tensp=$rowsp['name'];
        $imgsp=$rowsp['img'];
        $gia=$rowsp['giaban'];
        $km=$rowsp['giamgia'];
        $tien=($gia-$km)*$ipsl;
        $tl=$tkd-$tien;
        echo('
        <div class="infobill">
                
                    <div class="imgpro">
                    <img src="'.$imgsp.'" alt="avt của nhân viên">
                    </div>
                    <div class="rightifb">
                        <div class="infone">
                            <span>Mã sản phẩm:</span>
                            <div class="msp">'.$idsp.'</div>
                        </div>
                        <div class="infone">
                            <span>Tên sản phẩm:</span>
                            <div class="tsp">'.$tensp.'</div>
                        </div>
                        <div class="infone">
                            <span>Số lượng:</span>
                            <div class="sl">'.$ipsl.'</div>
                        </div>
                        <div class="infone">
                            <span>Giá bán:</span>
                            <div class="gb">'.$gia.'</div>
                        </div>
                        <div class="infone">
                            <span>Giảm giá:</span>
                            <div class="gg">'.$km.'</div>
                        </div>
                        <div class="infone">
                            <span>Tổng tiền:</span>
                            <div class="tt">'.$tien.'</div>
                        </div>
                    </div>     
                </div>
                <div class="hoadon scroll">
                    <div class="ifhd">
                        <span>SP</span>
                        '.$tensp.'
                    </div>
                    <div class="ifhd" id="slhd">
                        <span>SL</span>
                        '.$ipsl.'
                    </div>
                    <div class="ifhd">
                        <span>GIÁ</span>
                    '.$gia*$ipsl.'
                    </div>
                    <div class="sumbill">
                        Mã: </br>
                        Time: </br>
                        Khuyến mại:'.$km.' VND</br>
                        Thành tiền:'.$tien.' VND</br>
                        Trả lại:'.$tl.'</br>
                    </div>
                </div>');

    }else{
        returnno();
    }
}

else if($method==='adddb'){
    if($_POST['ipmsp']!=NULL){
        $ipmsp=$_POST['ipmsp'];
        $ipsl=$_POST['ipsl'];
        $sqllaysp="SELECT * FROM `sanpham` WHERE id=$ipmsp";
        $laysp=$connect->query($sqllaysp);
        $rowsp=$laysp->fetch_array(MYSQLI_ASSOC);
        $idsp=$rowsp['id'];
        $tensp=$rowsp['name'];
        $imgsp=$rowsp['img'];
        $gia=$rowsp['giaban'];
        $km=$rowsp['giamgia'];
        $tien=($gia-$km)*$ipsl;
        
        $nhapdon="INSERT INTO `banhang`(`id_sp`, `money`, `id_nv`, `soluong`) 
        VALUES ('$idsp','$tien','$idnv','$ipsl')";

        $querynd=mysqli_query($connect,  $nhapdon);
        if($querynd){
            returnno();
        }
    }
}
function returnno(){
    echo('
    <div class="infobill">
    <div class="imgpro"></div>
    <div class="rightifb">
        <div class="infone">
            <span>Mã sản phẩm:</span>
            <div class="msp"> </div>
        </div>
        <div class="infone">
            <span>Tên sản phẩm:</span>
            <div class="tsp"> </div>
        </div>
        <div class="infone">
            <span>Số lượng:</span>
            <div class="sl"> </div>
        </div>
        <div class="infone">
            <span>Giá bán:</span>
            <div class="gb"> </div>
        </div>
        <div class="infone">
            <span>Giảm giá:</span>
            <div class="gg"></div>
        </div>
        <div class="infone">
            <span>Tổng tiền:</span>
            <div class="tt"></div>
        </div>
    </div>

</div>
<div class="hoadon scroll">
    <div class="ifhd" id="spb">
        <span>SP</span>
    </div>
    <div class="ifhd" id="slhd">
        <span>SL</span>
    </div>
    <div class="ifhd" id="ghd">
        <span>GIÁ</span>
    </div>
    <div class="sumbill">
        Mã:</br>
        Time:</br>
        Khuyến mại:</br>
        Thành tiền:</br>
        Trả lại: 
    </div>
</div>

    ');
}
    
?>