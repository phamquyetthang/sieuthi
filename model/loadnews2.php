<?php
$sqlnew2= "SELECT news.id, news.title, news.content, news.img, news.time, 
            nhanvien.id AS idemp, nhanvien.fullname, nhanvien.position, nhanvien.avt
            FROM news 
            INNER JOIN nhanvien ON news.id_nv= nhanvien.id 
            WHERE position=2 ORDER BY news.id DESC";
$connews2=$connect->query($sqlnew2);
if (!$connews2) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
while($rownews2=$connews2->fetch_array(MYSQLI_ASSOC)){

    $idnew2=$rownews2['id'];
    $id_nv_news2=$rownews2['idemp'];
    $title_news2=$rownews2['title'];
    $content_news2=$rownews2['content'];
    $time_post2 = $rownews2['time'];
    $imgnews2 = $rownews2['img'];
    $name_nv2 = $rownews2['fullname'];
    $typenews2= $rownews2['position'];
    $avtposter2=$rownews2['avt'];
    if($imgnews2== NULL){ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$avtposter2.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$name_nv2.'</div>
                <div class="timepost">'.$time_post2.'</div>
            </div>
            <div class="titlenews">'.$title_news2.'</div>
            <div class="contentnews">
            '.$content_news2.'
            </div>
        </div> '
        );
    }else{ 
        echo (
            '<div class="contentnew">
            <div class="headnews">
                <div class="avtposter">
                <img src="'.$avtposter2.'" alt="ảnh người đăng">
                </div>
                <div class="nameposter">'.$name_nv2.'</div>
                <div class="timepost">'.$time_post2.'</div>
            </div>
            <div class="titlenews">'.$title_news2.'</div>
            <div class="contentnews">
                <div class="imagenews">
                <img src="'.$imgnews2.'" alt="ảnh minh họa">
                </div>
                '.$content_news2.'
            </div>
        </div> '
        );
    }
}
?>