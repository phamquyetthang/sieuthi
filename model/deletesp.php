<?php
require_once ("connect.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM `sanpham` WHERE `sanpham`.`id` = '$id'"; 
$result = mysqli_query($connect,$query);
if($result){
    echo("ngon");
}
header("Location: ../controller/posi.php"); 
?>