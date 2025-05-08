<?php
    include("../includes/connect.php");
    $sql = "select t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
            from (tbl_nhasanxuat l inner join tbl_sanpham t on t.IdNhaSanXuat=l.IdNhaSanXuat) ORDER BY IdSanPham DESC LIMIT 0, 5";
    
    $danhsach = $connect->query($sql);
    // Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    // $sql1 = "SELECT IdSanPham, TenSanPham, DonGia, HinhAnh FROM tbl_sanpham ";
    $result = $connect->query($sql);
    while($row = $danhsach->fetch_array(MYSQLI_ASSOC)){
        $giaban = $row['DonGia'] - (($row['TiLeGiamGia'] / 100) * $row['DonGia']);
        echo "<div class='khungsanpham'>";
            echo "<div class='card'>";					
                echo "<a href='sanpham_chitiet.php?do=sanpham_chitiet&id_sp=" .$row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>";
                    echo "<img class='hinhanh' src=" . $row["HinhAnh"] . "  style='width: 190px; height: 140px;'>";
                    echo "<span class='tensanpham' ></span> <br />";
                    echo "<span class=\"dongia\">". $row['DonGia'] . number_format($row['DonGia']). " đ</span>";
                echo "</a>";
            echo "<p> <a=href='sanpham_chitiet.php?do=sanpham_chitiet&id_sp=" . $row['IdSanPham'] . "&id_nsx=" . $row['IdNhaSanXuat'] . "'>" . $row['TenSanPham'] . "</a></p>";
    }
?>