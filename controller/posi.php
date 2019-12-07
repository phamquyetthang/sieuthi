<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: ../index.php');
}
if($_SESSION["type"]==2){
    header('Location: ../admin.php');
}
if($_SESSION["type"]==1){
    header('Location: ../employee.php');
}

?>