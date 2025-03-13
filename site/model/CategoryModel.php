<?php
   require_once('Database.php');
   //Ham lay tat ca san pham
   class CategoryModel{
       public function getAllPro(){
           $sql = "SELECT * FROM danhmuc";
    return Database::getInstance()->getAll($sql);
       }
       public function getProById($id) {
        $sql= "SELECT * FROM danhmuc WHERE id=$id";
        return Database::getInstance()->getOne($sql);
    }
   public function DeleteProduct($data) {
    $sql = "DELETE FROM danhmuc WHERE id=?";
    $params = array_values ($data);
    return Database::getInstance()->execute($sql,$params);
    }
    public function addCate($data){
        $sql = "INSERT INTO danhmuc (TenDanhMuc,HinhAnh)
        VALUES(?,?)";
        $params=array_values($data);
        return Database::getInstance()->execute($sql,$params);
    }
    public function DeleteCategory($data) {
        $sql = "DELETE FROM danhmuc WHERE id=?";
        $params = array_values ($data);
        return Database::getInstance()->execute($sql,$params);
    }
    public function editCateGory($data){
        $sql = "UPDATE danhmuc SET TenDanhMuc=?,HinhAnh=? WHERE id=?";
        $params = array_values ($data);
        return Database::getInstance()->execute($sql,$params);
    }
   }
?>