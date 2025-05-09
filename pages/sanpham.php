<?php
    include('../includes/connect.php');

    $sql = "SELECT t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
            FROM (tbl_nhasanxuat l INNER JOIN tbl_sanpham t ON t.IdNhaSanXuat=l.IdNhaSanXuat)
            LIMIT 0, 12";

    $result = $connect->query($sql);
    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }
    echo "<h2>Danh sách sản phẩm <h2>";
    echo "<div class='danhsachsanpham'>";
        while($row =  $result->fetch_array(MYSQLI_ASSOC)){
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
?>