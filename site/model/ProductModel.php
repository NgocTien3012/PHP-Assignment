<?php
   require_once('Database.php');
   //Ham lay tat ca san pham
   class ProductModel{
       public function getAllPro(){
           $sql = "SELECT * FROM sanpham";
    return Database::getInstance()->getAll($sql);
   }
   //Ham lay san pham noi bat
   public function getHotPro(){
       $sql = "SELECT * FROM sanpham Where NoiBat=1 ";
    return Database::getInstance()->getAll($sql);
   }
   //Ham lay san pham theo ma danh muc
   public function getProByCate($id){
        $sql = "SELECT * FROM sanpham Where idDanhMuc=$id";
        return Database::getInstance()->getAll($sql);
   }
   public function DeleteProduct($data) {
    $sql = "DELETE FROM sanpham WHERE id=?";
    $params = array_values ($data);
    return Database::getInstance()->execute($sql,$params);
    }
    public function addPro($data){
        $sql = "INSERT INTO sanpham(TenSanPham,Gia,GiaSale,NoiBat,IdDanhMuc,HinhAnh)
        VALUES(?,?,?,?,?,?)";
        $params=array_values($data);
        return Database::getInstance()->execute($sql,$params);
    }
    public function getProById($id) {
        $sql= "SELECT * FROM sanpham WHERE id=$id";
        return Database::getInstance()->getOne($sql);
    }
    public function editPro($data){
        $sql = "UPDATE sanpham SET TenSanPham=?,Gia=?,GiaSale=?,NoiBat=?,IdDanhMuc=?,HinhAnh=? WHERE id=?";
        $params = array_values ($data);
        return Database::getInstance()->execute($sql,$params);
    }
   }
?>