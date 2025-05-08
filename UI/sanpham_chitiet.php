<?php
    include("sanpham_cauhinh.php"); // Kết nối CSDL

    if (!isset($_GET['id_sp'])) {
        echo "Không có sản phẩm để hiển thị.";
        exit();
    }

    $IdSanPham = $_GET['id_sp'];

    $sql = "SELECT *
            FROM tbl_sanpham A
            JOIN tbl_nhasanxuat B ON A.IdNhaSanXuat = B.IdNhaSanXuat
            WHERE A.IdSanPham = $IdSanPham";

    $danhsach = $connect->query($sql);

    if (!$danhsach) {
        die("Lỗi truy vấn: " . $connect->error);
    }

    $dong = $danhsach->fetch_array(MYSQLI_ASSOC);

    // Cập nhật lượt xem
    $connect->query("UPDATE tbl_sanpham SET LuotXem = LuotXem + 1 WHERE IdSanPham = $IdSanPham");

    $giaban = $dong['DonGia'] - (($dong['TiLeGiamGia'] / 100) * $dong['DonGia']);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <style>
        .product-container {
            display: flex;
            max-width: 1000px;
            margin: 30px auto;
            font-family: Arial, sans-serif;
        }
        .product-image {
            flex: 1;
            padding: 20px;
        }
        .product-details {
            flex: 2;
            padding: 20px;
        }
        .product-details h3 {
            color: #c0392b;
        }
        .price, .original-price {
            font-size: 20px;
        }
        .original-price {
            text-decoration: line-through;
            color: gray;
            margin-left: 10px;
        }
        .config-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="product-container">
    <div class="product-image">
        <img src="<?php echo $dong['HinhAnh']; ?>" width="400" alt="Ảnh sản phẩm">
    </div>
    <div class="product-details">
        <h3><?php echo $dong['TenSanPham']; ?></h3>
        <p>Nhà sản xuất: <strong><?php echo $dong['TenNhaSanXuat']; ?></strong></p>
        <p class="price">Giá bán: <strong style="color:red;"><?php echo number_format($giaban); ?> đ</strong>
            <span class="original-price"><?php echo number_format($dong['DonGia']); ?> đ</span>
        </p>
        <p>Số lượng: <?php echo $dong['SoLuong']; ?></p>
        <p>Tỉ lệ giảm giá: <?php echo $dong['TiLeGiamGia']; ?>%</p>
        <p>Lượt xem: <?php echo $dong['LuotXem']; ?></p>

        <div class="config-section">
            <h4>Cấu hình sản phẩm:</h4>
            <p><?php echo nl2br($dong['CauHinh']); ?></p>
        </div>
    </div>
</div>

<hr>

<h3 style="text-align: center;">Sản phẩm cùng nhà sản xuất</h3>
<link rel="stylesheet" href="CSS\sanpham.css">
<?php include("sanpham_nhasanxuat.php"); ?>

</body>
</html>
