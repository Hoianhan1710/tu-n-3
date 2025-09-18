<?php
require_once("connect_db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST["btnSubmit"])){
$name=$_REQUEST["usename"];
$pass=$_REQUEST["passw"];
$email=$_REQUEST["gmail"];
$hoten=$_REQUEST["namee"];
$connet=connect_db();
if($connet)
{
    $sql="INSERT INTO quan_tri_vien(usename,password,name,email) VALUES ";
    $sql.= "('".$name."','".$pass."','".$email."','".$hoten."')";
    if(mysqli_query(mysql:$connet,query:$sql)){
        echo "thêm dữ liệu thành công ";
    }else{
        echo "lỗi thực thi:$sql <br>".mysqli_error(mysql:$connet);
    }
}
mysqli_close(mysql:$connet);
    }
}
?>