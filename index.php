<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
        }
        h1{
            margin-bottom: 20px;
        }
        form{
            display: flex;
            gap: 10px;
            flex-direction: column;
        }
        div{
            display: flex;

        }
        input{
            flex: 1;
        }
    </style>
</head>
<body>
    <form action="add.php" method="post">
        <h1>Thêm Quản Trị viên </h1>
        <div>
            <label> 
                tên đăng nhập
            </label>
            <input type="text" name="usename"> 
        </div>
        <div>
            <label> Mật Khẩu</label>
            <input type="passwordd" name="passw">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="gmail">
        </div>
        <div>
            <label>Họ Tên</label>
            <input type="text" name="namee">
        </div>
        <input type="submit" value="thêm mới" name="btnSubmit">
    </form>
</body>
</html>