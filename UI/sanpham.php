<!-- Trang home -->
<!DOCTYPE html>
<html>
	<head>
		<title>Phone Store</title>
		<meta charset="utf-8" />
	</head>
	<body>
		
		
		<?php
			session_start();
			include_once("sanpham_cauhinh.php"); 

			if(isset($_GET["limit_home"]) == true)
				{
					$_SESSION['limit_home'] += 6;
				}
				else
				{
					$_SESSION['limit_home'] = 12;
				}
				$limit_home_ok =  $_SESSION['limit_home'];
				
				

		$sql = "select t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
		from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat)
		order by LuotXem DESC Limit 0,".$limit_home_ok;		
				
				$danhsach = $connect->query($sql);
				//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
				if (!$danhsach) {
					die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
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
							echo "<a href='sanpham_index.php?do=sanpham_chitiet&id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>";
								echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . "  style='width: 190px; height: 140px;'>";
								echo "<span class='tenphim' ></span> <br />";
							echo "</a>";
							echo "<span class=\"luotxem\">". $row['LuotXem'] ." lượt xem </span><span class=\"giaban\">". number_format($giaban)." đ</span>";
							echo "<br /><span class=\"luotxem\"></span><span class=\"dongia\">". number_format($row['DonGia'])." đ</span>";
						echo "</div>";
						echo "<p><a  href='sanpham_index.php?do=sanpham_chitiet&id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>" . $row['TenSanPham'] . "</a></p>";
						
					echo "</div>";
					
				}

				if($count_kq > $_SESSION['limit_home'])
				{
					echo "<h3 class=\"xemthem\"><a href='sanpham_index.php?do=home&limit_home=ok'>Xem thêm các sản phẩm khác</a></h3></td>";
				
				}
		?>


<?php 
	 	
?>
		
	</body>
</html>