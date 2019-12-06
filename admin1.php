<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: index.php');
}
if($_SESSION["type"]==1){
    header('Location: employee.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin</title>
    <link rel="stylesheet" href="style/adminstyle.css">
    <style>
        #hometab{
            display: none;
        }
        #nhanvien{
            display: block;
        }
    </style>
</head>
<body>
    <div class="left">
        <div class="user">
            <div class="avtemp">

            </div>
            <div class="infoemp">

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
                
            </div>
            <div class="nvtabcon" id="listemp">
                    
            </div>
                
        </div>
    <div class="right scroll" id="reprotab">
        <div class="headsale">
            <button class="menusale" onclick="openSale('addpro')">Trả lại hàng</button>
            <button class="menusale" onclick="openSale('listpro')">Lịch sử</button>
        </div>
        <div class="retabcon" id="addpro">
                
            </div>
            <div class="retabcon" id="listpro">
                    
            </div>
            
    </div>

    <script src="script/adscript.js"></script>
</body>
</html>