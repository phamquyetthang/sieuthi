<?php
$sqlnew1= "SELECT news.id, news.title, news.content, news.img, news.time, 
            nhanvien.id AS idemp, nhanvien.fullname, nhanvien.position, nhanvien.avt
            FROM news 
            INNER JOIN nhanvien ON news.id_nv= nhanvien.id 
            WHERE position=2 ORDER BY news.id DESC";
$connews1=$connect->query($sqlnew1);
if (!$connews1) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
while($rownews1=$connews1->fetch_array(MYSQLI_ASSOC)){

    $idnew1=$rownews1['id'];
    $id_nv_news1=$rownews1['idemp'];
    $title_news1=$rownews1['title'];
    $content_news1=$rownews1['content'];
    $time_post1 = $rownews1['time'];
    $imgnews1 = $rownews1['img'];
    $name_nv1 = $rownews1['fullname'];
    $typenews1= $rownews1['position'];
    $avtposter=$rownews1['avt'];
    if($imgnews1== NULL){ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$avtposter.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$name_nv1.'</div>
                <div class="timepost">'.$time_post1.'</div>
            </div>
            <div class="titlenews">'.$title_news1.'</div>
            <div class="contentnews">
            '.$content_news1.'
            </div>
        </div> '
        );
    }else{ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$avtposter.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$name_nv1.'</div>
                <div class="timepost">'.$time_post1.'</div>
            </div>
            <div class="titlenews">'.$title_news1.'</div>
            <div class="contentnews">
            '.$content_news1.'
                <div class="imagenews">
                <img src="'.$imgnews1.'" alt="ảnh minh họa">
                </div>
            </div>
        </div> '
        );
    }
}
?>