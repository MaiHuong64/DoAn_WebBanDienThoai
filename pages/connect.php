<?php
    $servername = "localhost";
    $username = "root";
    $password = "vertrigo";
    $dbname = "mydb";
?>

// Tạo kết nối
<?php
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if($conn -> connect_error) 
        die("Kết nối thất bại: " . $conn -> connect_error);
    else 
        echo "Kết nối thành công";
?>