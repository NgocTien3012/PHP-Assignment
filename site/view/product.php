<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>

    <link rel="stylesheet" href="../site/public/css/style1.css">
</head>
<body>
<main>
    <div class="right-box">
    <div class="container1">
    <div class="hot">
    <?php foreach ($productAll as $product) { ?>
        <div class="sanpham">
            <img src="../site/public/img/<?=$product['HinhAnh'] ?>" alt="">
            <p class="namesp"><?= $product['TenSanPham'] ?></p>
            <span><?= $product['Gia'] ?>đ</span> <br> 
            <a href=""><button>Xem chi tiết</button></a>
        </div>
    <?php } ?>
    </div> 
</div>
</main>
</body>
</html>
