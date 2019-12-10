<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: ../index.php');
}
require_once ("connect.php");
$id=$_REQUEST['id'];
$query = "SELECT * from nhanvien where id='$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sửa nhân viên</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            background-color: #ddd;
        }
        .inputemp{
            position: relative;
            width: 890px;
            margin-top: 30px;
            margin-left: 50%;
            transform: translateX(-50%);
        }
        .inputemp div{
            display: inline-block;
        }
        .inputemp div input{
            width: 170px;
            height: 35px;
            border:  1px solid #0481BF;
            border-radius: 3px;
            background-color: white;
            padding-left: 2px;
        }
        #themnhanvien{
            position: absolute;
            top: 260px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 50px;
            font-size: 20px;
            border-radius: 3px;
            border: #00a1f2 1px solid;
            background-color: #eee;
        }

        #themnhanvien:hover{
            background-color: #0481BF;
        }
        h1{
            margin-left: 50%;
            transform: translateX(-15%);
        }
    </style>
</head>
<body>
    <div class="form">
    <p><a href="../controller/posi.php">Trở về</a></p>
    <h1>Sửa nhân viên</h1>
    <div class="nvtabcon" id="addemp">
        <?php
        // $tenuser=$_REQUEST['tenuser'];
        // $tennhanvien=$_REQUEST['tennhanvien'];
        // $sdtuser=$_REQUEST['sdtuser'];
        // $startuser=$_REQUEST['startuser'];
        // $posiuser=$_REQUEST['posiuser'];
        // $pwuser=$_REQUEST['pwuser'];
        // $emailuser=$_REQUEST['emailuser'];
        // $finuser=$_REQUEST['finuser'];
        // $salauser=$_REQUEST['salauser'];

        // $sqludnv="UPDATE nhanvien SET accname='$tenuser', fullname='$tennhanvien', sdt='$sdtuser',
        //     email='$emailuser', password='$pwuser', start='$startuser',
        //     finish='$finuser', salary='$salauser', position='$posiuser'
        //     WHERE nhanvien.id= '$id'";
        //     $upval = mysqli_query($connect, $sqludnv);

        //     if($upval){
        //         echo("ok");
        //     }else{
        //         echo("đéo được");
        //     }
        ?>

        <form method="post" action="doittnv.php">
            <div class="inputemp" id="inputemp">
                <input type="hidden" name="idnv" value="<?php echo($id); ?>">
                <div>
                    <span>Tên tài khoản:</span><br>
                    <input type="text" name="tenuser" id="tenuser"  required value="<?php echo $row['accname'];?>">
                </div>
                <div >
                    <span>Tên nhân viên:</span><br>
                    <input type="text" name="tennhanvien" id="tennhanvien" required value="<?php echo $row['fullname'];?>">
                </div>
                <div>
                    <span>Số điện thoại:</span><br>
                    <input type="text" name="sdtuser" id="sdtuser" required value="<?php echo $row['sdt'];?>">
                </div>
                <div>
                    <span>Bắt đầu ca làm:</span><br>
                    <input list="startuser" name="startuser" id="startuser" required value="<?php echo $row['start'];?>">
                    <datalist id="startuser">
                        <option value="07:00:00"></option>
                        <option value="12:00:00"></option>
                        <option value="18:00:00"></option>
                    </datalist> 
                </div>
                <div >
                    <span>Chức vụ:</span><br>
                    <!-- <input type="text" name="posiuser" id="posiuser"> -->
                    <input list="posiuser" name="posiuser" id="posiuser" required value="<?php echo $row['position'];?>">
                    <datalist id="posiuser">
                        <option value="1">Nhân viên</option>
                        <option value="2">Quản lý</option>
                    </datalist> 
                </div>
                <div>
                    <span>Mật khẩu:</span><br>
                    <input type="password" name="pwuser" id="pwuser" required value="<?php echo $row['password'];?>">
                </div>
                <div>
                    <span>Xác nhận mật khẩu:</span><br>
                    <input type="password" name="pwagain" id="pwagain" required value="<?php echo $row['password'];?>">
                </div>
                <div >
                    <span>Địa chỉ email:</span><br>
                    <input type="email" name="emailuser" id="emailuser" required value="<?php echo $row['email'];?>">
                </div>
                <div>
                    <span>Kết thúc ca làm:</span><br>
                    <input list="finuser" name="finuser" id="finuser" required value="<?php echo $row['finish'];?>">
                    <datalist id="finuser">
                        <option value="12:00:00"></option>
                        <option value="18:00:00"></option>
                        <option value="23:00:00"></option>
                    </datalist> 
                </div>
                <div >
                    <span>Mức lương:</span><br>
                    <input type="text" name="salauser" id="salauser" required value="<?php echo $row['salary'];?>">
                </div>
            </div>
            <input type="submit" name="submit" id="themnhanvien" value="Sửa thông tin">
        </form>


    </div>
</div>
</body>
</html>