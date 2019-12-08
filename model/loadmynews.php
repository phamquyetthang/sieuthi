<?php
$empid=$_SESSION['empid'];
$mynews= "SELECT news.id, news.title, news.content, news.img, news.time, 
            nhanvien.id AS idemp, nhanvien.fullname, nhanvien.position, nhanvien.avt
            FROM news 
            INNER JOIN nhanvien ON news.id_nv= nhanvien.id 
            WHERE position=1 AND nhanvien.id=$empid
            ORDER BY news.id DESC";
$conmynews=$connect->query($mynews);
if (!$conmynews) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
while($rowmynews=$conmynews->fetch_array(MYSQLI_ASSOC)){

    $idmynew=$rowmynews['id'];
    $id_nv_mynews=$rowmynews['idemp'];
    $title_mynews=$rowmynews['title'];
    $content_mynews=$rowmynews['content'];
    $timemypost = $rowmynews['time'];
    $imgmynews = $rowmynews['img'];
    $myname = $rowmynews['fullname'];
    $typemynews= $rowmynews['position'];
    $myavt=$rowmynews['avt'];
    if($imgmynews== NULL){ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$myavt.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$myname.'</div>
                <div class="timepost">'.$timemypost.'</div>
            </div>
            <div class="titlenews">'.$title_mynews.'</div>
            <div class="contentnews">
            '.$content_mynews.'
            </div>
        </div> '
        );
    }else{ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$myavt.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$myname.'</div>
                <div class="timepost">'.$timemypost.'</div>
            </div>
            <div class="titlenews">'.$title_mynews.'</div>
            <div class="contentnews">
                <div class="imagenews">
                <img src="'.$imgmynews.'" alt="ảnh minh họa">
                </div>
                '.$content_mynews.'
            </div>
        </div> '
        );
    }
}
?>