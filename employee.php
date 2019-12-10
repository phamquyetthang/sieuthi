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
$idnv=$_SESSION['empid'];
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
    <link rel="stylesheet" href="style/employee.css">
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
        <div class="locnews">
            <button class="locnewsc" id="btnthongbao" onclick="openNews('news1')">Thông báo</button>
            <button class="locnewsc" id="btnbaiviet" onclick="openNews('news2')">Bài viết</button>
        </div>
        
        <button class="creatus cu-p" id="creatus">Đăng bài</button>
        <div class="rightofright">
            <div class="oclock">
                    <div id="clock"></div>
            </div>
            <div class="chat">
                <div class="headchat">
                    <div class="avtchat"><?php
				        echo '<img src="'.$empavt.'" alt="avt của nhân viên">';
			        ?></div>
                    <div class="namechat"><?php echo ('<div class="empname">'.$empfull.'</div>'); ?></div>
                </div>
                <div class="messages scroll">
                    <div class="onemess">
                        <div class="message">
                            <p class="tdmess"><span>phucchi</span></p>
                            <p>Tin nhan ne</p>
                        </div>
                    </div>
                </div>
                <textarea class="entry" placeholder="gì đó" name="" cols="30" rows="10"></textarea>
            </div>
        </div>
        
    </div>


    <div class="right scroll" id="saletab">
        <div class="headsale">
            <button class="menusale" onclick="openSale('saling')">Bán hàng</button>
            <button class="menusale" onclick="openSale('hissale')">Lịch sử</button>
        </div>
        <div class="saletabcon" id="saling">
            <div id="saleajax">
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
                        Trả lại:</br>
                    </div>
                </div>

            </div>
            <form method="post">
                <div class="contsale scroll" id="havebill">
                    <div class="inputone">
                        <span>Mã sản phẩm:</span>
                        <input type="text" class="ipmsp" id="ipmsp">
                    </div>
                    <div class="inputone">
                        <span>Số lượng:</span>
                        <input type="text" class="ipsl" id="ipsl">
                    </div>
                </div>
                <input type="text" name="moneykhach" class="moneykhach" id="tkd" placeholder="Tiền khách">
                
            </form>
            <button class="taohoadon" id="taohoadon">Check</button>
            <button class="addbill" id="addbill">+</button>
            <div class="thanhtoan">
                <button class="thanhtoan" id="thanhtoan">Thanh toán</button>
            </div>
        </div>
        <div class="saletabcon" id="hissale">
            <div class="banghis">
                <div>Mã đơn hàng</div><div>Mã sản phẩm</div>
                <div>Tên sản phẩm</div>
                <div>Số lượng</div>
                <div>Số tiền</div>
                <div>Thời gian</div>
            </div>
            <div class="his_s_ajax">

            </div>
        </div>
        
    </div>

<!-- trả hàng  -->
    <div class="right scroll" id="reprotab">
        <div class="headsale">
            <button class="menusale" onclick="openReturn('returning')">Trả lại hàng</button>
            <button class="menusale" onclick="openReturn('hisreturn')">Lịch sử</button>
        </div>

        <div class="returntabcon" id="returning">

            <div class="checkreturn">
                <input type="text" name="madonhang" id="madonhang" placeholder="Mã đơn hàng">
                <input type="text" name="sldonhang" id="sldonhang" placeholder="Số lượng hàng hóa">
                <input type="text" id="lydotra" placeholder="Lý do trả lại">
                <button id="kiemtradh">Kiểm tra đơn hàng</button>
                <button id="thuchienrt">Thực hiện hoàn trả</button>
                
            </div>

            <div class="infohoantra" id="infohoantra">
                <div>
                    <span>Mã đơn hàng:</span>
                    <div id="mdhht"></div>
                </div>
                <div >
                    <span>Sản phẩm:</span>
                    <div id="idspht"></div>
                </div>
                <div>
                    <span>Số lượng khi mua:</span>
                    <div id="slht"></div>
                </div>
                <div>
                    <span>Thời điểm mua hàng:</span>
                    <div id="timedh"></div>
                </div>
                <div >
                    <span>Số tiền đã thanh toán:</span>
                    <div id="moneyht"></div>
                </div>
                <img src="" alt="ảnh hàng hóa">
                <div id="sotientralai">
                    <span>Số tiền hoàn lại:</span>
                    <div id="sotienhl"></div>
                </div>
            </div>
        </div>
        <div class="returntabcon" id="hisreturn">
            <div class="banghis">
                <div>Mã trả hàng</div><div>Mã đơn hàng</div>
                <div>Tên sản phẩm</div>
                <div>Số lượng</div>
                <div>Lý do</div>
                <div>Thời gian</div>
            </div>
            <div class="his_r_ajax">

            </div>
               
        </div>
            
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
    <div id="xemavt">
    <button class="exit" onclick="closeAny('xemavt')">x</button>
    <?php
    echo('<img src="'.$empavt.'" alt="ảnh người đăng">')
    ?>
    </div>

    <div id="doiavt">
        
        <button class="exit" onclick="closeAny('doiavt')">x</button>
        <form action="model/doiavt.php" method="post">
            <input type="file" name="doiavt" id="nguonavt">
            <input type="submit" value="Thay đổi" id="upanh" name="upanh">
            <!-- <button id="upanh">Thay đổi</button> -->
        </form>
        <!-- <button id="upanh">Thay đổi</button> -->
       
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/chat.js"></script>
    <script src="script/saleajax.js"></script>
    <script src="script/returnajax.js"></script>
    <script src="script/loadhis.js"></script>
</body>

</html>