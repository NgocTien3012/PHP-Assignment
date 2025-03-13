<h2>Thêm sản phẩm</h2>
<form action="?page=addpro" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="TenSanPham">
    </div>
    <div>
        <label for="">Giá</label>
        <input type="text" name="Gia">
    </div>
    <div>
        <label for="">Giá sale</label>
        <input type="text" name="GiaSale">
    </div>
    <div>
        <label for="">Hình ảnh</label>
        <input type="file" name="HinhAnh">
    </div>
    <div>
        <label for="Nổi bật">Nổi bật</label>
        <input type="text" name="NoiBat">
    </div>
    <div>
        <label for="">ID danh mục</label>
        <input type="text" name="IdDanhMuc">
    </div>
    <button type="submit">Thêm</button>
</form>