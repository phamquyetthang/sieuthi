<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: index.php');
}
if($_SESSION["type"]==1){
    header('Location: employee.php');
}
?>
<?php
require_once ("model/connect.php");
require_once ("model/loadinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Calistoga&display=swap');
    </style>
    <link rel="stylesheet" href="style/adminstyle.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/hiddenstyle.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div  id="manChan"></div>
    <div class="left">
        <div class="user">
            <div class="avtemp">
            <?php
				
				echo '<img src="'.$empavt.'" alt="avt của nhân viên">';
			?>
            </div>
            <div class="infoemp">
            <?php
            echo ('<div class="empname">'.$empfull.'</div>');
            echo ('<div class="calam">Ca làm: từ '.$empstart.' đến '.$empfini.'</div>');
            ?>
            </div>
        </div>
        <button class="multichoose" onclick="openTabs('hometab')">Trang chủ</button>
        <button class="multichoose" onclick="openTabs('nhanvien')">Nhân viên</button>
        <button class="multichoose" onclick="openTabs('reprotab')">Sản phẩm</button>
        <button class="multichoose" onclick="openTabs('baocao')">Báo cáo doanh thu</button>
        <button class="multichoose" onclick="openTabs('infotab')">Bản thân</button>

        <form action="inorout/out.php" method="post">
            <input type="submit" value="Đăng xuất" class="logout" name="logout">
        </form>
    </div>
    <div class="right" id="hometab">
        <div class="news scroll" id="news1">
            <?php
                require_once ("model/loadnews2.php");
            ?>
        </div>
        <div class="news scroll" id="news2">
            <?php
            require_once ("model/loadnews1.php")
            ?>
        </div>
        <button class="creatus cu-p" id="creatus" onclick="openAny('creatusform')">Đăng bài</button>
            <div class="locnews">
                <button class="locnewsc" onclick="openNews('news1')">Thông báo</button>
                <button class="locnewsc" onclick="openNews('news2')">Bài viết</button>
            </div>
            
        </div>
        <div class="oclock">
            <div id="oclock"></div>
        </div>
        <div class="chat">
            <div class="messages scroll">
                <div class="message">
                    <a href="#">phucchi</a>
                    <p>Tin nhan ne</p>
                </div>
            </div>
            <textarea class="entry" placeholder="gì đó" name="" cols="30" rows="10"></textarea>
        </div>
    </div>

    <div class="right scroll" id="nhanvien">
            <div class="headsale">
                <button class="menusale" onclick="openMenu('nvtabcon','addemp')">Thêm nhân viên</button>
                <button class="menusale" onclick="openMenu('nvtabcon','listemp')">Danh sách</button>
            </div>
            <div class="nvtabcon" id="addemp">
                <div style="font-size: 38px">
                    Vùng thực hiện việc thêm nhân viên:</br>
                    id nhân viên tự động tăng</br>
                    sdt và email đã để mặc định có thể thêm hoặc không(Nên có thêm)</br>
                    ảnh avata cũng đã để mặc định, không cần thiết thêm</br>
                    Nếu thêm avt thì lưu dưới dạng $avt='library/img/'+$filename;<br>
                </div>
            </div>
            <div class="nvtabcon" id="listemp">
                <div style="font-size: 38px">
                    Hiển thị bảng thông tin nhân viên</br>
                    Có thể xóa, sửa thông tin</br>
                </div>
            </div>
                
        </div>

    <div class="right scroll" id="baocao">
        <div id="chart_div"></div>
        <?php 
            $sqltbs="SELECT COUNT(*) AS tonggd, SUM(money) AS tongt FROM `banhang`";
            $sqltth="SELECT COUNT(*) AS tttra, SUM(soluong*(sanpham.giaban-sanpham.giamgia)) AS tmmtra
            FROM `trahang`
            INNER JOIN sanpham ON trahang.id_sp=sanpham.id";
            $tongbans=$connect->query($sqltbs);
            $rowbans=$tongbans->fetch_array(MYSQLI_ASSOC);
            $tonggd=$rowbans['tonggd'];
            $tongtgd=$rowbans['tongt'];

            $tongtrar=$connect->query($sqltth);
            $rowtrar=$tongtrar->fetch_array(MYSQLI_ASSOC);
            
            $tttra=$rowtrar['tttra'];
            $tmmtra=$rowtrar['tmmtra'];
            
            echo('
            <div class="thongke">
            <div>
                <span>Tổng đơn hàng giao dịch:</span>
                <div id="tdhdd">'.$tonggd.'</div>
            </div>
            <div>
                <span>Tổng đơn hàng trả lại:</span>
                <div id="tstdd">'.$tttra.'</div>
            </div>
            <div>
                <span>Tổng số tiền trả lại:</span>
                <div id="tstdd">'.$tmmtra.' VND</div>
            </div>
            <div>
                <span>Tổng số doanh thu:</span>
                <div id="tstdd">'.$tongtgd.' VND</div>
            </div>
            
        </div>
            ');
        ?>
        
        <?php
            
            $sqlmaxday="SELECT MAX(DAY(time)) AS maxday FROM `banhang` WHERE 1";
            $loadday=$connect->query($sqlmaxday);
            $rowday=$loadday->fetch_array(MYSQLI_ASSOC);
            $maxday=$rowday['maxday'];
            $minday=$maxday-7;
            for($i=$minday; $i<=$maxday;$i++){
                $sqlsum="SELECT SUM(money)AS sumt FROM `banhang` WHERE DAY(time)='$i'";
                $loadsum=$connect->query( $sqlsum);
                $rowsum=$loadsum->fetch_array(MYSQLI_ASSOC);
                if($rowsum['sumt']===NULL){
                    $sum[$i]=0;
                }else{
                    $sum[$i]=$rowsum['sumt'];
                }
                
            }
            for($i=$minday; $i<=$maxday;$i++){
                $sqlsumre="SELECT SUM(trahang.soluong*(sanpham.giaban-sanpham.giamgia)) AS tongtra
                FROM `trahang`
                INNER JOIN sanpham ON trahang.id_sp=sanpham.id
                WHERE DAY(time)='$i'";
                $loadsumre=$connect->query($sqlsumre);
                $rowsumre=$loadsumre->fetch_array(MYSQLI_ASSOC);
                if($rowsumre['tongtra']===NULL){
                    $sumre[$i]=0;
                }else{
                    $sumre[$i]=$rowsumre['tongtra'];
                }
                
            }
            // echo ($sum[8]);
        ?>
        <script type="text/javascript">
            google.charts.load("current", {packages:["imagelinechart"]});
            google.charts.setOnLoadCallback(drawChart);
            var ia= <?php echo json_encode($maxday);?>;
            var vac= <?php echo json_encode($sum);?>;
            var vrc=<?php echo json_encode($sumre); ?>;
            var day7=vac[ia], day6=vac[ia-1], day5= vac[ia-2], day4=vac[ia-3];
            var day3=vac[ia-4], day2=vac[ia-5], day1=vac[ia-6];
            var day7r=vrc[ia], day6r=vrc[ia-1], day5r= vrc[ia-2], day4r=vrc[ia-3];
            var day3r=vrc[ia-4], day2r=vrc[ia-5], day1r=vrc[ia-6];
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Sales', 'Return'],
                [String(ia-6),  day1,       day1r],
                [String(ia-5),  day2,       day2r],
                [String(ia-4),  day3,       day3r],
                [String(ia-3),  day4,       day4r],
                [String(ia-2),  day5,       day5r],
                [String(ia-1),  day6,       day6r],
                [String(ia),  day7,       day7r]
            ]);

            var chart = new google.visualization.ImageLineChart(document.getElementById('chart_div'));

            chart.draw(data, {width: 800, height: 540, min: 0});
            }
        </script>
    </div>
        
    <div class="right scroll" id="infotab">
        <div class="leftinfo">
            <div class="avtinfo">
                <?php
                echo('<img src="'.$empavt.'" alt="ảnh người đăng">')
                ?>
            <div class="menuimg">
                <button onclick="openAny('doiavt')">Thay đổi</button>
                <button onclick="openAny('xemavt')">Xem ảnh</button>
            </div>
            </div>
            <div class="moreinfo">
                <div><span>Họ và tên:</span><br>
                    <?php
                    echo($empfull);
                    ?>
                </div>
                <div><span>Tên tài khoản:</span><br>
                <?php
                    echo($empname);
                    ?>
                </div>
                <div><span>Chức vụ:</span><br>
                <?php
                    echo($chucvu);
                    ?>
                </div>
                <div><span>Ca làm việc:</span><br>
                <?php 
                echo("Từ: $empstart đến: $empfini")
                ?>
                </div>
                <div><span>Số điện thoại:</span><br>
                <?php
                echo($empsdt);
                ?>
                </div>
                <div><span>Địa chỉ email:</span><br>
                <?php
                echo($empemail);
                ?>
                </div>
                <div><span>Tổng ngày làm:</span><br>
                <?php echo((int)$dayword); ?>
                </div>
                <div><span>Lương tạm tính:</span><br>
                <?php echo($thunhap); ?> VND
                </div>
            </div>
        </div>
        <div class="rightinfo scroll">
        <?php
        require_once ("model/loadmynews.php");
        ?>
        </div>
    </div>
        <!-- form đăng bài  -->
    <div class="creatusform" id="creatusform">
        <button class="exit" onclick="closeAny('creatusform')">x</button>
        <form action="model/postnews.php" method="post">
            <input type="text" name="titlenews" id="tieuden" placeholder="Tiêu đề" required="required">
            <textarea name="contentnews" id="noidungn" cols="30" rows="10" placeholder="Nội dung" required="required"></textarea>
            <span>Ảnh minh họa:</span>
            <input type="file" name="imgnews" id="anhn">
            <input type="submit" value="Đăng" name="postnews" id="postn">
        </form>
    </div>
    <div id="xemavt">
        <button class="exit" onclick="closeAny('xemavt')">x</button>
        <?php
        echo('<img src="'.$empavt.'" alt="ảnh người đăng">')
        ?>
    </div>

    <div id="doiavt">
        <form action="doiavt.php" method="post">

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="script/chat.js"></script>
    <script src="script/adscript.js"></script>
</body>
</html>