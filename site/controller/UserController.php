<?php
class UserController{
    private $userModel;
    public function __construct(){
        require_once('model/UserModel.php');
        $this -> userModel = new UserModel();
    }
    public function renderController() {
        require_once('view/register.php');
    }
    public function renderRegister() {
        require_once('view/register.php');
    }
    public function register($data){
        $result = $this -> userModel ->addUser($data);
        if($result) {
            header('location:index.php?page=registerpage');

        }else {
            echo"Đăng ký thất bại";
        }
    }
    public function renderLogin() {
        require_once('view/login.php');
    }
    public function login($data){
        //print_r($data);
        $user= $this ->userModel->getUser($data);
        if($user){
            echo ("Đăng Nhập Thành Công");
            $_SESSION['user'] = $user;
            if($user['VaiTro']==1){
                header('location:../admin/index.php');
            } else{
                header('location:index.php');
            }
        } else{
            echo("Đăng nhập thất bại,nhập lại");
        }
    }
    public function logout(){
        unset($_SESSION['user']);
        header('location:index.php');
    }
}
?>