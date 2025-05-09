<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sửa thông tin khách hàng</title>
	<link rel="stylesheet" type="text/css" href="../CSS/suakhachhang.css" />
</head>
<body>
<?php	
	include("../includes/connect.php");

	$bien = isset($_GET['id']) ? (int)$_GET['id'] : 0;

	// Dùng prepared statement để tăng bảo mật
	$stmt = $connect->prepare("SELECT * FROM tbl_khachhang WHERE MaKH = ?");
	$stmt->bind_param("i", $bien);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows == 0) {
		echo "<p>Không tìm thấy khách hàng.</p>";
		exit;
	}

	$row = $result->fetch_array(MYSQLI_ASSOC); 
?>

<div class="form-wrapper">
    <form action="suakhachhang_submit.php" method="post">
        <table class="Form">
            <tr>
                <td colspan="2" class="tieude1">Cập nhật thông tin khách hàng</td>			
            </tr>		

            <input type="hidden" name="MaKH" value="<?php echo $row['MaKH']; ?>" />		

            <tr>
                <td>Họ và tên:</td>
                <td>
                    <input type="text" name="HoTen" value="<?php echo htmlspecialchars($row['HoVaTen']); ?>" required />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Năm sinh (YYYY):</td>
                <td>
                    <input type="text" name="NamSinh" value="<?php echo $row['NamSinh']; ?>" required />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="GioiTinh" value="0" <?php if($row['GioiTinh'] == 0) echo 'checked'; ?> />Nam
                    <input type="radio" name="GioiTinh" value="1" <?php if($row['GioiTinh'] == 1) echo 'checked'; ?> />Nữ
                </td>
            </tr>

            <tr>
                <td>Số Điện Thoại:</td>
                <td>
                    <input type="text" name="SoDienThoai" value="<?php echo $row['SoDienThoai']; ?>" required />
                    <span class="requirefield">*</span>
                </td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <input type="text" name="DiaChi" value="<?php echo htmlspecialchars($row['DiaChi']); ?>" required />
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <div class="note">(*): Các trường bắt buộc nhập thông tin.</div>
                    <input type="submit" value="Cập nhật" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
