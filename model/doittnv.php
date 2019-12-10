<?php
require_once ("connect.php");
if(isset($_POST['submit'])){
    $id=$_POST['idsp'];
    $tensp=$_POST['tensp'];
    $giabansp=$_POST['giabansp'];
    $giamgiasp=$_POST['giamgiasp'];
    $motasp=$_POST['motasp'];

    $sqludnv="UPDATE sanpham SET name='$tensp', giaban='$giabansp', giamgia='$giamgiasp', mota='$motasp'
        WHERE sanpham.id= '$id'";
    $upval = mysqli_query($connect, $sqludnv);

    if($upval){
        header('Location: ../controller/posi.php');
    }else{
        echo("không được");
    }



}

    ?>