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
        <button class="multichoose" onclick="openTabs('')">Khách hàng</button>
        <button class="multichoose" onclick="openTabs('')">Báo cáo doanh thu</button>
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
    <div class="right scroll" id="reprotab">
        <div class="headsale">
            <button class="menusale" onclick="openSale('addpro')">Trả lại hàng</button>
            <button class="menusale" onclick="openSale('listpro')">Lịch sử</button>
        </div>
        <div class="retabcon" id="addpro">
            <div style="font-size: 38px">
                   Vùng thêm sản phẩm
                </div>
            </div>
            <div class="retabcon" id="listpro">
                    Vùng quản lý sản phẩm</br>
                    Hiện thông tin, xóa, sửa</br>
            </div>
            
    </div>
    <div class="right scroll" id="infotab">
        <div class="leftinfo">
            <div class="avtinfo">
                <?php
                echo('<img src="'.$empavt.'" alt="ảnh người đăng">')
                ?>
            <div class="menuimg">
                <button >Thay đổi</button>
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
            </div>
        </div>
        <div class="rightinfo scroll">
        <?php
        require_once ("model/loadmynews.php");
        ?>
        </div>
    </div>

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