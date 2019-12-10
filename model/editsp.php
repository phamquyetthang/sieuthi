<?php
session_start();
if(empty($_SESSION["username"])){
	header('Location: ../index.php');
}
require_once ("connect.php");
$id=$_REQUEST['id'];
$query = "SELECT * from sanpham where id='$id'";
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
            width: 990px;
            margin-top: 30px;
            margin-left: 50%;
            transform: translateX(-35%);
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
        /* #motasp{
            float: left;
            width: 415px;
            padding: 10px;
            border-right: #0481BF 1px solid;
        } */
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
            <div class="inputemp" id="inputpro">
                <input type="hidden" name="idsp" value="<?php echo($id); ?>">
                <div>
                    <span>Tên sản phẩm:</span><br>
                    <input type="text" name="tensp" id="tensp" required value="<?php echo $row['name'];?>">
                </div>
                <div >
                    <span>Giá bán:</span><br>
                    <input type="text" name="giabansp" id="giabansp" required value="<?php echo $row['giaban'];?>">
                </div>
                <div>
                    <span>Giảm giá:</span><br>
                    <input type="text" name="giamgiasp" id="giamgiasp" required value="<?php echo $row['giamgia'];?>">
                </div>
                <div>
                    <span>Mô tả:</span><br>
                    <input type="text" name="motasp" id="motasp" required value="<?php echo $row['mota'];?>">
                </div>
            </div>
            <input type="submit" name="submit" id="themnhanvien" value="Sửa thông tin">
        </form>


    </div>
</div>
</body>
</html>