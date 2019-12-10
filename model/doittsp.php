<?php
require_once ("connect.php");
if(isset($_POST['submit'])){
    $id=$_POST['idnv'];
    $tenuser=$_POST['tenuser'];
    $tennhanvien=$_POST['tennhanvien'];
    $sdtuser=$_POST['sdtuser'];
    $startuser=$_POST['startuser'];
    $posiuser=$_POST['posiuser'];
    $pwuser=$_POST['pwuser'];
    $emailuser=$_POST['emailuser'];
    $finuser=$_POST['finuser'];
    $salauser=$_POST['salauser'];

    $sqludnv="UPDATE nhanvien SET accname='$tenuser', fullname='$tennhanvien', sdt='$sdtuser',
        email='$emailuser', password='$pwuser', start='$startuser',
        finish='$finuser', salary='$salauser', position='$posiuser'
        WHERE nhanvien.id= '$id'";
    $upval = mysqli_query($connect, $sqludnv);

    if($upval){
        header('Location: ../controller/posi.php');
    }else{
        echo("không được");
    }



}

    ?>