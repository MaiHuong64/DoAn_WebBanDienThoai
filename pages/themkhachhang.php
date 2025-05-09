<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký khách hàng</title>
    <link rel="stylesheet" type="text/css" href="../CSS/themkhachhang.css">
    
</head>
<body>

<div class="form-wrapper">
    <form action="themkhachhang_submit.php" method="post">
        <table class="Form">
            <tr>
                <td colspan="2" class="tieude1">Đăng ký khách hàng thân thiết</td>         
            </tr>       

            <tr>
                <td>Họ và tên:</td>
                <td>
                    <input type="text" name="HoTen" />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Năm sinh (YYYY):</td>
                <td>
                    <input type="text" name="NamSinh" />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Giới tính:</td>
                <td>
                    <label><input type="radio" name="GioiTinh" value="0" checked /> Nam</label>
                    <label><input type="radio" name="GioiTinh" value="1" /> Nữ</label>
                </td>
            </tr>

            <tr>
                <td>Số Điện Thoại:</td>
                <td>
                    <input type="text" name="SoDienThoai" />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <input type="text" name="DiaChi" ></input>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <div class="note">(*): Các trường bắt buộc nhập thông tin.</div>
                    <input type="submit" value="Đăng ký" />
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
