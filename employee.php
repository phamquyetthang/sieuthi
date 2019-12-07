<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: index.php');
}
if($_SESSION["type"]==2){
    header('Location: admin.php');
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
    <title>Super Thị</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Calistoga&display=swap');
    </style>
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
        <button class="multichoose" onclick="openTabs('saletab')">Bán hàng</button>
        <button class="multichoose" onclick="openTabs('reprotab')">Trả hàng</button>
        <button class="multichoose" onclick="openTabs('reprotab')">Bản thân</button>


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

            <button class="creatus cu-p" id="creatus">Đăng bài</button>
            <div class="locnews">
                <button class="locnewsc">Thông báo</button>
                <button class="locnewsc">Bài viết</button>
            </div>
            
        </div>
        <div class="oclock">
                <div id="clock"></div>
        </div>
        <div class="chattab">

        </div>
    </div>


    <div class="right scroll" id="saletab">
        <div class="headsale">
            <button class="menusale" onclick="openSale('saling')">Bán hàng</button>
            <button class="menusale" onclick="openSale('hissale')">Lịch sử</button>
        </div>
        <div class="saletabcon" id="saling">
                <div class="infobill">
                
                    <div class="imgpro">
    
                    </div>
                    <div class="rightifb">
                        <div class="infone">
                            <span>Mã sản phẩm:</span>
                            <div class="msp">

                            </div>
                        </div>
                        <div class="infone">
                            <span>Tên sản phẩm:</span>
                            <div class="tsp">

                            </div>
                        </div>
                        <div class="infone">
                            <span>Số lượng:</span>
                            <div class="sl">

                            </div>
                        </div>
                        <div class="infone">
                            <span>Giá bán:</span>
                            <div class="gb">

                            </div>
                        </div>
                        <div class="infone">
                            <span>Giảm giá:</span>
                            <div class="gg">

                            </div>
                        </div>
                        <div class="infone">
                            <span>Tổng tiền:</span>
                            <div class="tt">

                            </div>
                        </div>
                    </div>
                    
                        
                </div>
            <div class="contsale scroll" id="havebill">
                <div class="inputone">
                    <span>Mã sản phẩm:</span>
                    <input type="text" class="ipmsp">
                </div>
                <div class="inputone">
                    <span>Số lượng:</span>
                    <input type="text" class="ipsl">
                </div>
            </div>

            <!-- <div class="infone">
                <input type="submit" value="Check" class="checkhang">
            </div> -->
            
            <button class="addbill" id="addbill">+</button>
            <button class="taohoadon">Check</button>
            <div class="hoadon">

            </div>
            <div class="thanhtoan">
                <button class="thanhtoan">Thanh toán</button>
            </div>
        </div>
        <div class="saletabcon" id="hissale">
                
        </div>
        
    </div>

    <div class="right scroll" id="reprotab">
        <div class="headsale">
            <button class="menusale" onclick="openSale('returning')">Trả lại hàng</button>
            <button class="menusale" onclick="openSale('havereturn')">Lịch sử</button>
        </div>
        <div class="saletabcon" id="returning">
            <div class="contsale scroll" id="havereturn">
                <div class="infobill">
                    <div class="imgpro">
    
                    </div>
                    
                </div>
            </div>
            <div class="thanhtoan">
                <button class="thanhtoan">Thực hiện</button>
            </div>
            <button class="addbill" id="addreturn">+</button>
        </div>
        <div class="saletabcon" id="hisreturn">
                
        </div>
            
    </div>

    <div class="creatusform" id="creatusform">
        <button class="exit" onclick="exit('creatusform')">x</button>
        <form action="model/postnews.php" method="post">
            <input type="text" name="titlenews" id="tieuden" placeholder="Tiêu đề" required="required">
            <textarea name="contentnews" id="noidungn" cols="30" rows="10" placeholder="Nội dung" required="required"></textarea>
            <span>Ảnh minh họa:</span>
            <input type="file" name="imgnews" id="anhn">
            <input type="submit" value="Đăng" name="postnews" id="postn">
        </form>
    </div>




    <script src="script/script.js"></script>
</body>
</html>