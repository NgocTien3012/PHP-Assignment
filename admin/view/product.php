<h2>Quản lý sản phẩm</h2>
<a href="?page=addpropage"><button class="product1"> Thêm sản phẩm</button></a>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Giá sale</th>
        <th>Hình Ảnh</th>
        <th>Nổi Bật</th>
        <th>ID danh mục</th>
        <th>Thao Tác</th>
    </tr>
    <?php  foreach ($productAll as $key=>$value){?>
        <tr>
           <td><?=$key+1?></td>
           <td><?=$value['TenSanPham']?></td>
           <td><?=$value['Gia']?></td>
           <td><?=$value['GiaSale']?></td>
           <td><img src="../public/img/<?=$value['HinhAnh']?>"  width="100px"></td>
           <td><?=$value['NoiBat']?></td>
           <td><?=$value['IdDanhMuc']?></td>
           <td>
            <a href="?page=editpropage&id=<?= $value['id']?>">
            <button>Sửa</button>
            </a>
            <a href="?page=deletepro&id=<?=$value ['id']?>">
            <button class="btn" >Xóa</button>
            </a>
           </td>
        </tr>
    <?php }?>
</table>