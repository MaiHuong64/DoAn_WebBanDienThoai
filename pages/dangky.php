<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dangky.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="dangky.php" method="post">
            <h1>Đăng ký</h1>
            <div class="username">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="password">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
            </div>
            <div class="confirm-password">
                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Nhập lại mật khẩu" required>
            </div>
            <button type="submit">Đăng ký</button>
            <div class="DangNhap">
                <p>Bạn đã có tài khoản? <a href="dangnhap.html">Đăng nhập ngay</a></p>
            </div>
        </form>
    </div>
</body>
</html>