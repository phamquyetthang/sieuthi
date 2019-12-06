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
    <link rel="stylesheet" href="style/adminstyle.css">
</head>
<body>
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
        <button class="multichoose" onclick="openTabs('')">Bản thân</button>

        <form action="inorout/out.php" method="post">
            <input type="submit" value="Đăng xuất" class="logout" name="logout">
        </form>
    </div>
    <div class="right" id="hometab">
        <div class="news">
            <div class="contentnew">
                    Phát biểu sau trận đấu kịch tính với Thái Lan, 
                    HLV Park Hang-seo cho biết: "Xin cảm ơn các cầu thủ và người hâm mộ. 
                    Chỉ có trận hòa nhưng chúng tôi đã giành vé vào bán kết.
                    Cuộc chạm trán với Singapore và Thái Lan đều rất khó khăn. 
                    Ngày hôm nay, U22 Việt Nam còn bị dẫn trước đến 2 bàn.

            </div>
            <div class="contentnew">
                    Phát biểu sau trận</br> đấu kịch tính với Thái Lan, 
                    HLV Park Hang-seo</br> cho biết: "Xin cảm ơn các</br> cầu thủ và người hâm mộ. 
                    Chỉ có trận hòa nhưng</br> chúng tôi đã giành</br> vé vào bán kết.
                    Cuộc chạm trán với </br>Singapore và Thái Lan đều</br> rất khó khăn. 
                    Ngày hôm nay, U22 Việt Nam còn bị dẫn</br> trước đến 2 bàn.

            </div>

            <button class="creatus">Đăng bài</button>
            <div class="locnews">
                <button class="locnewsc">Thông báo</button>
                <button class="locnewsc">Bài viết</button>
            </div>
            
        </div>
        <div class="oclock">
            <div id="oclock"></div>
        </div>
        <div class="chattab">

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

    <script src="script/adscript.js"></script>
</body>
</html>