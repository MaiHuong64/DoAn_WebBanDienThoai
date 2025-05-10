<?php
    include("../includes/connect.php");

    $sql = "SELECT t.IdSanPham, t.TenSanPham, t.IdNhaSanXuat, t.HinhAnh, t.DonGia, t.SoLuong, t.MoTa, t.CauHinh, t.TiLeGiamGia, t.LuotXem, l.IdNhaSanXuat, l.TenNhaSanXuat
            FROM (tbl_nhasanxuat l INNER JOIN tbl_sanpham t ON t.IdNhaSanXuat=l.IdNhaSanXuat) 
            ORDER BY IdSanPham DESC 
            LIMIT 0, 6";
    $result = $connect->query($sql);
    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();             
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    if($page < 1) {
        $page = 1;
    }
    $limit = 6; // Số sản phẩm trên mỗi trang
    $start = ($page - 1) * $limit; // Tính toán vị trí bắt đầu
?>