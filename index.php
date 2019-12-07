<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Super Thị</title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Calistoga&display=swap');
</style>
<link rel="stylesheet" href="style/loginstyle.css">

</head>
<body>
<div class="manChan" id="manChan"></div>
    <h1>HỆ THỐNG QUẢN LÝ SIÊU THỊ</h1>
    <div class="login" id="login" >
        <form action="inorout/in.php" method="post">
            <input type="text" name="username" placeholder="Tên đăng nhập" class="oinput" autofocus>
            <input type="password" name="password" placeholder="Mật Khẩu" class="oinput">
            <input type="submit" value="Đăng Nhập" class="osubmit" name="submit">
        </form>
    </div>
</body>
</html>