<?php
    include('../includes/connect.php');

    if(isset($_GET["limit_home"]) == true){
        $_SESSION['limit_home'] += 6;
    } else {
        $_SESSION['limit_home'] = 12;
    }
    $limit_home_ok = $_SESSION['limit_home'];
    
    $sql = "SELECT t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
		    from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat)
		    order by LuotXem DESC Limit 0,".$limit_home_ok;		                        

    $result = $connect->query($sql);
    $sql1 = "select count(*) from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat)";
    $danhsach = $connect->query($sql1);
    $count = $danhsach->fetch_array(MYSQLI_NUM);
    if ($count == 0) {
        echo "<h2>Không có sản phẩm nào<h2>";
        exit();
    }

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    echo "<h2>Danh sách sản phẩm</h2>";
    echo "<div class='danhsachsanpham'>";
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            echo "<div class='khungsanpham'>";
            echo "<div class='card'>";
                echo "<a href='sanpham_chitiet.php?do=sanpham_chitiet&id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>";
                    echo "<img class='HinhAnh' src=../images/" . $row["HinhAnh"] . " alt='" . $row['TenSanPham'] . "'>";
                    echo "<span class='TenSanPham'>" . $row['TenSanPham'] . "</span><br />";
                    echo "<span class='dongia'>" . number_format($row['DonGia']) . " đ</span>";
                echo "</a>";
                echo "</div>";
            echo "</div>";
        }
        echo "</div>";

    if($count > $_SESSION['limit_home']){
        // Tạo nút "Xem thêm" nếu số lượng sản phẩm lớn hơn giới hạn
        echo "<h3 class=\"xemthem\"><a href='sanpham.php?do=sanpham&limit_home_ok'>Xem thêm</a>";
        echo "</h3>";
    }
?>