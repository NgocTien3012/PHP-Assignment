<?php
session_start();
$page = $_GET['page'] ?? 'home';
require_once ("view/header.php");
require_once ("controller/ProductController.php");
switch ($page) {
    case 'home':
        $productController = new ProductController();
        $productController -> renderHome();
        break;
    case 'product':
        $productController = new ProductController();
        $productController -> renderProduct();
        break;
    case "registerpage":
        require_once('controller/UserController.php');           
        $userController = new UserController();
        $userController ->renderController();
        break;
    case "register":
        $data=$_POST;
        require_once('controller/UserController.php');
        $userController = new UserController();
        $userController ->register($data);
        break;
    case "loginpage":
        require_once('controller/UserController.php');
        $userController = new UserController();
        $userController ->renderLogin();
        break;
    case "login":
        $data = $_POST;
        require_once('controller/UserController.php');
        $userController = new UserController();
        $userController ->login($data);
        break;
    case "logout":
        require_once('controller/UserController.php');
        $userController = new UserController();
        $userController ->logout();
        break;    
    default:
}
require_once("view/footer.php");  
?>
