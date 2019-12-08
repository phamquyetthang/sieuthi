<?php
session_start();
?>
<html>
<head>
  <meta http-equiv='refresh' content='0.5; URL=http://localhost/sieuthi/controller/posi.php'>
</head>
</html>
<?php
$server = "localhost";
$username = "anyone"; // Khai báo username
$password = "baanhem";// Khai báo password
$dbname = "sieuthi";      // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
$empid=$_SESSION['empid'];
		if(isset($_POST['postnews'])){
			$title= addslashes(nl2br(htmlentities($_POST['titlenews'])));
            $content= addslashes(nl2br(htmlentities($_POST['contentnews'])));
            
            if(empty($_POST['imgnews'])){
                $img=NULL;
                $addnews="INSERT INTO `news`(`id_nv`, `title`,`content`) 
                VALUES ('$empid','$title','$content')";
                $query=mysqli_query($connect,  $addnews);
                if(!$query){
                    echo("không được");
                }else{
                    echo($content);
                }
                
            }else{
                $file=$_POST['imgnews'];
                $img="library/img/".$file;
                $addnews="INSERT INTO `news`(`id_nv`, `title`,`content`,img) 
						VALUES ('$empid','$title','$content','$img')";
                $query=mysqli_query($connect,  $addnews);
                if(!$query){
                    echo("không được");
                }else{
                    echo($content);
                }
            }
            
		}
?>