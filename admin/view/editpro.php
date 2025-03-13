<h1>Sửa sản phẩm</h1>
<form action="?page=editpro&id=<?=$product['id']?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Tên sản phẩm</label>
    </div>
    <input type="text" name="TenSanPham" value="<?=$product['TenSanPham']?>">
    <div>
        <label for="">Giá</label>
    </div>
    <input type="text" name="Gia" value="<?=$product['Gia']?>">
    <div>
        <label for="">Giá khuyến mãi</label>
    </div>
    <input type="text" name="GiaSale" value="<?=$product['GiaSale']?>">
    <div>
        <label for="">Hình ảnh</label>
        <img src="../public/img/<?=$product['HinhAnh']?>" width="100">
        <input type="file" name="HinhAnh">
    </div>
    <div>
        <label for="">Nổi bật</label>
    </div>
    <input type="text" name="NoiBat" value="<?=$product['NoiBat']?>">
    <div>
        <label for="">ID danh mục</label>
    </div>
    <input type="text" name="IdDanhMuc" value="<?=$product['IdDanhMuc']?>">
    <button type="submit">Sửa sản phẩm</button>
</form>