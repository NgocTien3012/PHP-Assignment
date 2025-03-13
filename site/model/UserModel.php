<?php
require_once('Database.php');
class UserModel {
    public function addUser($data){
        $sql="INSERT INTO khachhang(Email,Pass,HoTen,DiaChi) VALUES (?,?,?,?)";
        $params= array_values($data);
        return Database::getInstance()->execute($sql,$params);
    }
    public function getUser($data){
        $sql="SELECT * FROM khachhang WHERE 
        Email='".$data ['Email']."' AND Pass='".$data['Pass']."' ";
        return Database::getInstance()->getOne($sql);
    }
}

?>