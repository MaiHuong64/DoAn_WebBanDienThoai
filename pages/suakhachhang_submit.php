<?php
    include("../includes/connect.php");
    // Kiểm tra xem có dữ liệu được gửi từ form không

	$MaKH =  $_POST['MaKH'];
	$HoTen = trim($_POST['HoTen']);
	$NamSinh = trim($_POST['NamSinh']);
	$GioiTinh = $_POST['GioiTinh'];
	$SoDienThoai = trim($_POST['SoDienThoai']);
	$DiaChi =  trim($_POST['DiaChi']);

	if ($HoTen == "")
		echo "Họ tên không được bỏ trống!";
	elseif ($NamSinh == "" || !is_numeric($NamSinh))
		echo "Năm sinh không được bỏ trống và phải là số!";
	elseif ($SoDienThoai == "" || !is_numeric($SoDienThoai)|| strlen($SoDienThoai) > 10)
		echo "Số điện thoại không được bỏ trống phải là số và không vượt quá 10 ký tự!";
	else {
		// Dùng prepared statement để tránh SQL injection
		$sql = "UPDATE tbl_khachhang SET HoVaTen = ?, NamSinh = ?, GioiTinh = ?, SoDienThoai = ?, DiaChi = ? WHERE MaKH = ?";
		$stmt = $connect->prepare($sql);
		$stmt->bind_param("sisssi", $HoTen, $NamSinh, $GioiTinh, $SoDienThoai, $DiaChi, $MaKH);

		if ($stmt->execute()) {
			header("Location: dskhachhang.php");
			exit;
		} else {
			echo "Lỗi: " . $stmt->error;
		}
		$stmt->close();
		$connect->close();
	}
?>
