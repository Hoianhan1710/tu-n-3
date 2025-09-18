<?php
function connect_db():bool|mysqli{
    $host="localhost";
    $username= "root";
    $password= "";
    $dbname= "mysql";
    $conn=mysqli_connect($host,$username,$password,database: $dbname);
    if(!$conn){
        die("kết nối CSDL thất bại: ".mysqli_connect_error());
    }
    return $conn;
}
?>