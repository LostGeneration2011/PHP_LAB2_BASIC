<?php include 'header.php'; ?>

<div class="container">
    <aside class="sidebar">
        <h3>Danh Mục Sản Phẩm</h3>
        <ul>
            <li><a href="#">Điện Thoại</a></li>
            <li><a href="#">Máy Tính Bảng</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Phụ Kiện</a></li>
        </ul>
        <h3>Đánh Giá</h3>
        <ul>
            <li><a href="#">5 Sao (10)</a></li>
            <li><a href="#">4 Sao (5)</a></li>
            <li><a href="#">3 Sao (3)</a></li>
            <li><a href="#">2 Sao (1)</a></li>
            <li><a href="#">1 Sao (0)</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="camera-container">
            <?php
            $cameras = [
                [
                    "name" => "Máy Ảnh Canon SX730 HS (Hàng Nhập Khẩu)",
                    "image" => "img-1.jpg",
                    "price" => "7.690.000 đ",
                    "old_price" => "9.370.000 đ",
                    "discount" => "-18%"
                ],
                [
                    "name" => "Máy Ảnh Canon SX720 HS (Hàng Nhập Khẩu)",
                    "image" => "img-2.jpg",
                    "price" => "6.290.000 đ",
                    "old_price" => "7.870.000 đ",
                    "discount" => "-20%"
                ],
                [
                    "name" => "Máy Ảnh Canon Canon SX 620 HS (Hàng Nhập Khẩu)",
                    "image" => "img-3.jpg",
                    "price" => "4.890.000 đ",
                    "old_price" => "6.240.000 đ",
                    "discount" => "-22%"
                ],
                [
                    "name" => "Máy Ảnh Canon SX730 HS (Hàng Chính Hãng)",
                    "image" => "img-4.jpg",
                    "price" => "9.170.000 đ",
                    "old_price" => "10.620.000 đ",
                    "discount" => "-14%"
                ],
                [
                    "name" => "Máy Ảnh Canon Powershot G3X (Lê Bảo Minh)",
                    "image" => "img-5.jpg",
                    "price" => "16.990.000 đ",
                    "old_price" => "22.500.000 đ",
                    "discount" => "-24%"
                ],
                [
                    "name" => "Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)",
                    "image" => "img-6.jpg",
                    "price" => "9.490.000 đ",
                    "old_price" => "11.990.000 đ",
                    "discount" => "-21%"
                ]
            ];

            foreach ($cameras as $camera) {
                echo '<div class="camera-item">';
                echo '<img src="' . $camera['image'] . '" alt="' . $camera['name'] . '">';
                echo '<h3 class="name">' . $camera['name'] . '</h3>';
                echo '<p class="price">' . $camera['price'] . '</p>';
                echo '<p class="old-price">' . $camera['old_price'] . '</p>';
                echo '<p class="discount">' . $camera['discount'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
</div>

<?php include 'footer.php'; ?>
