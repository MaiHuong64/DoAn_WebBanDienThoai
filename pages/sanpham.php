<!DOCTYPE html>
<html>
	<head>
		<title>Trang Tin Điện Tử</title>
		<meta charset="utf-8" />
	</head>
	<body>
		
		
<?php
	// Khởi tạo phiên
	session_start();
	
	// // Thiết lập kết nối cơ sở dữ liệu
	// $servername = "localhost";
	// $username = "root";
	// $password = "vertrigo";
	// $dbname = "shopdt";	
	
	// $connect = new mysqli($servername, $username, $password, $dbname);	
	// mysqli_set_charset($connect, 'UTF8');
	
	
	// Kiểm tra kết nối
	// if ($connect->connect_error) {
	//     die("Không kết nối: " . $connect->connect_error);
	// }
	
	
	// Xử lý limit
	if(isset($_GET["limit_home"]) == true)
	{
		$_SESSION['limit_home'] += 6;
	}
	else
	{
		$_SESSION['limit_home'] = 12;
	}
	$limit_home_ok = $_SESSION['limit_home'];
	
	// Truy vấn sản phẩm	
	$sql = "select t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
  from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat)
  order by LuotXem DESC Limit 0,".$limit_home_ok;		
		
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->error);
		exit();
	}
	
	$sql1 = "select * from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat)";
	$danhsach2 = $connect->query($sql1);
	$count_kq = mysqli_num_rows($danhsach2);
	
	
	while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
	{				
		$giaban = $row['DonGia'] - (($row['TiLeGiamGia'] /100) * $row['DonGia']);
		echo "<div class='khungsanpham'>";
			echo "<div class='card'>";					
				echo "<a href='sanpham_chitiet.php?id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>";
					echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . "  style='width: 190px; height: 140px;'>";
					echo "<span class='tenphim' ></span> <br />";
				echo "</a>";
				echo "<span class=\"luotxem\">". $row['LuotXem'] ." lượt xem </span><span class=\"giaban\">". number_format($giaban)." đ</span>";
				echo "<br /><span class=\"luotxem\"></span><span class=\"dongia\">". number_format($row['DonGia'])." đ</span>";
			echo "</div>";
			echo "<p><a  href='sanpham_chitiet.php?id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>" . $row['TenSanPham'] . "</a></p>";
					
			echo "</div>";
				
		}

	if($count_kq > $_SESSION['limit_home'])
	{
		echo "<h3 class=\"xemthem\"><a href='index.php?do=home&limit_home=ok'>Xem thêm các sản phẩm khác</a></h3>";
	}
	
	// Đóng kết nối
	$connect->close();
?>
		
	</body>
</html>