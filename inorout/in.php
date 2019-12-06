<?php
session_start();
?>
<?php
$hostname = "localhost";
$username = "anyone";
$password = "baanhem";
$db = "sieuthi";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Không thể truy cập cơ sở dữ liệu được : " . $dbconnect->connect_error);
}
//Lấy giá trị POST từ form vừa submit
if(isset($_POST['submit'])){
    $logname = $_POST['username'];
    $logpass = $_POST['password'];
    // $logtype = $_POST['type'];
    if($logname==""||$logpass==""){
        echo "Hãy điền đầy đủ thông tin";
    }else{
        $sqlin="SELECT * FROM `nhanvien` WHERE accname='$logname' and password='$logpass'";
        $queryin=mysqli_query($dbconnect, $sqlin);
        $num_rows=mysqli_num_rows($queryin);
        if($num_rows!=0){
            $row=mysqli_fetch_assoc($queryin);
            $_SESSION['empid']=$row['id'];
            $_SESSION["username"]=$row['accname'];
            $_SESSION["fullname"]=$row['fullname'];
            $_SESSION["type"]=$row['position'];
            $positionus=$_SESSION["type"];
            if($positionus==1){
                header('Location: ../employee.php');
                echo $_SESSION["username"];
                die();
            }else{
                header('Location: ../admin.php');
                echo $_SESSION["username"];
                die();
            }
        }
        else{
            header('Location: ../index.php');
            die();
        }
    }
}
//Đóng database
$connect->close();
?>