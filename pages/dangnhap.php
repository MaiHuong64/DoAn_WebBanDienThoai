<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../CSS/dangnhap.css">
   
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Đăng nhập</h1>
            <div class="username">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="password">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" placeholder="Mật khẩu"  required>
            </div>
            <div class="forgot-password">
                <p><a href="#">Quên mật khẩu?</a></p>
            </div>
            <button type="submit">Đăng nhập</button>
            <div class="register">
                <p>Bạn chưa có tài khoản? <a href="dangky.html">Đăng ký</a></p>
            </div>
           
        </form>
    </div>
    
</body>
</html>