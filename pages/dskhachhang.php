<?php
	include("../includes/connect.php"); 

	$sql = "SELECT * FROM tbl_khachhang"; 
	$danhsach = $connect->query($sql); 

	if (!$danhsach) { 
		die("Không thể thực hiện câu lệnh SQL: ". $connect->error); 
	}
?>
<link rel="stylesheet" type="text/css" href="../CSS/dskhachhang.css">

<table class="List">
	<tr><td colspan="8" class="tieude1">Danh sách khách hàng</td></tr>	
	<tr>
		<th>Mã KH</th>
		<th>Họ và tên</th>
		<th>Năm sinh</th>
		<th>Giới tính</th>
		<th>Số Điện Thoai</th>
		<th>Địa Chỉ</th>
		<th>Sửa</th>
        <th>Xóa</th>
	</tr>

	<?php	
	if ($danhsach->num_rows > 0) {
		while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) { 
			echo "<tr>"; 
			echo "<td>" . $row['MaKH'] . "</td>"; 
			echo "<td>" . htmlspecialchars($row['HoVaTen']) . "</td>"; 
			echo "<td>" . $row['NamSinh'] . "</td>"; 
			echo "<td>" . ($row['GioiTinh'] == 0 ? "Nam" : "Nữ") . "</td>"; 
			echo "<td>" . $row['SoDienThoai'] . "</td>"; 
			echo "<td>" . htmlspecialchars($row['DiaChi']) . "</td>"; 
			echo "<td><a href='suakhachhang.php?id=" . $row['MaKH'] . "'><img src='../images/edit.png' alt='Sửa' title='Sửa'/></a></td>"; 
			echo "<td><a href='xoakhachhang.php?id=" . $row['MaKH'] . "' onclick=\"return confirm('Bạn có chắc chắn muốn xóa khách hàng này?');\"><img src='../images/delete.png' alt='Xóa' title='Xóa'/></a></td>"; 
			echo "</tr>"; 
		}
	} else {
		echo "<tr><td colspan='8'>Không có khách hàng nào.</td></tr>";
	}

	$connect->close();
	?>
</table>
<!-- <a href="themkhachhang.php" class="add-button" >+ Thêm khách hàng</a> -->
