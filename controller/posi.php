<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: ../index.php');
}

if($_SESSION["type"]==2){
    header('Location: ../admin.php');
}
if($_SESSION["type"]==1){
    if($_SESSION['timein']>=0 && $_SESSION['timeout']>=0){
        header('Location: ../employee.php');
    }else{
        echo("Ca làm việc của bạn đã hết<br> Hãy về nhà nghỉ ngơi và chăm sóc gia đình");
    }
    
}
?>