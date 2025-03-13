<h1>Sản phẩm bán chạy</h1>
<div class="container1">
    <div class="hot">
    <?php foreach ($productHot as $product) { ?>
        <div class="sanpham">
            <img src="../site/public/img/<?=$product['HinhAnh'] ?>" alt="">
            <p class="namesp"><?= $product['TenSanPham'] ?></p>
            <span><?= $product['Gia'] ?>đ</span> <br />
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span><br />
            
        </div>
    <?php } ?>
    </div> 
</div>

<h1 class="sale2">
      Sản Phẩm Sale<img src="../site/public/img/sale2.gif" alt="" width="200px" class="sale1" />
    </h1>
<div class="container1">
    <div class="hot">
    <?php foreach ($productSales as $product) { ?>
        <div class="sanpham">
            <img src="../site/public/img/<?=$product['HinhAnh'] ?>" alt="">
            <p class="namesp"><?= $product['TenSanPham'] ?></p>
            <span><?= $product['Gia'] ?>đ</span> <del><?=$product['GiaSale'] ?>đ</del> <br />
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span><br />
            
        </div>
    <?php } ?>
    </div> 
</div>
<h1>Sản phẩm Giày Nam</h1>
<div class="container1">
    <div class="hot">
    <?php foreach ($proCate1 as $product) { ?>
        <div class="sanpham">
            <img src="<?=$product['HinhAnh'] ?>" alt="">
            <p class="namesp"><?= $product['TenSanPham'] ?></p>
            <span><?= $product['Gia'] ?>đ</span> <br />
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span><br />
            
        </div>
    <?php } ?>
    </div> 
</div>
<h1>Sản phẩm Giày Nữ</h1>
<div class="container1">
    <div class="hot">
    <?php foreach ($proCate2 as $product) { ?>
        <div class="sanpham">
            <img src="<?=$product['HinhAnh'] ?>" alt="">
            <p class="namesp"><?= $product['TenSanPham'] ?></p>
            <span><?= $product['Gia'] ?>đ</span>  <br />
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span><br />
            
        </div>
    <?php } ?>
    </div> 
</div>
