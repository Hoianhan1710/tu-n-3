<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <h1>Nhập Thông Tin Sinh Viên</h1>
        <label for="">MSSV</label><input type="text" name="mssv"><br>
        <label for="">Họ Tên:</label><input type="text" name="username"><br>
        <label for="">Giới Tính: </label>Nam <input type="radio" name="gioitinh" checked> Nữ <input type="radio" name="gioitinh" ><br>
        <label>Ngôn ngữ lập trình: </label> C++ <input type="checkbox" name="lg1" value="C"> ,PHP <input type="checkbox" name="lg2" value="PHP">
        <label for="">Thành Phố: </label><select name="ThanhPho" id=""> 
        <option value="HN">Hà Nội</option>
        <option value="SG">Sài Gòn</option>
        <option value="LA">Long An</option></select>
        <br>
        <label for="">Tin nhắn</label><br>
        <textarea name="ghichu" id="" rows="10" cols="40"></textarea><br>
        <input type="submit" value="Gửi">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
      if(isset($_REQUEST["mssv"]) ){
        $mssv=$_REQUEST["mssv"];
      }
      if(isset($_REQUEST["username"]) ){
        $name=$_REQUEST["username"];
      }
      if(isset($_REQUEST["gioitinh"]) ){
        $sex=$_REQUEST["gioitinh"];
      }
      if(isset($_REQUEST["lg1"])){
        $Lg1=$_REQUEST["lg1"];
      }
      if(isset($_REQUEST["lg2"])){
        $Lg2=$_REQUEST["lg2"];
      }
      if(isset($_REQUEST["ThanhPho"])){
        $Tp=$_REQUEST["ThanhPho"];
      }
      if(isset($_REQUEST["ghichu"])){
        $text=$_REQUEST["ghichu"];
      }
      
    }
    ?>
    <div>
      <?php
      echo " <div><h1>Thông tin nhận được</h1>MSSV:".$mssv." <br>Họ Tên:".$name." <br> Giới tính:".$sex." <br>Ngôn ngữ lập trình:".$Lg1.",".$Lg2." <br>Thành Phố:".$Tp." <br>Tin nhắn:".$text."   <br> </div> ";
      ?>
    </div>
</body>
</html>