<?php
 session_start();
 if(!isset($_SESSION['user']['VaiTro']) || $_SESSION['user']['VaiTro']!= 1){
     header('location:../site/index.php?page=loginpage');
 }
    require_once ('view/header.php');
    include_once('controller/ProductController.php');
    include_once('controller/CategoryController.php');

    $page = $_GET ['page'] ?? "product";
    switch ($page ) {
        case "product";
             $productController = new ProductController();
             $productController -> renderProduct();
            //echo "Đây là quản trị sản phẩm";
            break;
        case "category";
            $categoryController = new CategoryController();
            $categoryController -> renderCategory();
            break;

        case "addCategory":
            $categoryController = new CategoryController();
            $categoryController -> renderAddCategory();
            break;
        
        case"addCate";
            $data=$_POST;
            $data['HinhAnh']=$_FILES ['HinhAnh']['name'];
            //print_r($data);
            move_uploaded_file($_FILES['HinhAnh']['tmp_name'],"../public/img/".$_FILES['HinhAnh']['name']);
            $categoryController = new CategoryController();
            $categoryController -> addCate($data);
            break;

        case "editCate":
            $data=$_POST;
            $data['HinhAnh']=$_FILES ['HinhAnh']['name'];
            //print_r($data);
            move_uploaded_file($_FILES['HinhAnh']['tmp_name'],"../public/img/".$_FILES['HinhAnh']['name']);
            $data['id']=$_GET['id'];
            $categoryController = new CategoryController();
            $categoryController ->editCate($data);
            break;
        
        case "editCategory":
            $id = $_GET['id'];
            $categoryController = new CategoryController();
            $categoryController -> renderEditCategory($id);
            break;

        case "DeleteCategory":
            $data['id']=$_GET['id'];
            $CategoryController = new CategoryController();
            $CategoryController ->DeleteCategory($data);
            break;

        case "addpropage";
            $productController = new ProductController();
            $productController -> renderAddProduct();
            break;

        case"addpro";
            $data=$_POST;
            $data['HinhAnh']=$_FILES ['HinhAnh']['name'];
            //print_r($data);
            move_uploaded_file($_FILES['HinhAnh']['tmp_name'],"../public/img/".$_FILES['HinhAnh']['name']);
            $productController = new ProductController();
            $productController ->addProduct($data);
            break;

        case "editpropage":
            $id = $_GET['id'];
            $productController = new ProductController();
            $productController -> renderEditProduct($id);
            break;

        case "editpro":
            $data=$_POST;
            $data['HinhAnh']=$_FILES ['HinhAnh']['name'];
            //print_r($data);
            move_uploaded_file($_FILES['HinhAnh']['tmp_name'],"../public/img/".$_FILES['HinhAnh']['name']);
            $data['id']=$_GET['id'];
            $productController = new ProductController();
            $productController ->editProduct($data);
            break;
        case "deletepro":
            $data['id']=$_GET['id'];
            $productController = new ProductController();
            $productController ->Delete($data);
            break;

        case "logout":
            if(isset($_SESSION['user'])){
                session_destroy();
                header('location:../site/index.php');
            }
        
        case "statistic":
            echo ('Hiện đang bảo trì tính năng');
            break;
        case "user":
            echo ("Hiện đang bảo trì tính năng");
            break;
        case "order":
            echo ("Hiện đang bảo trì tính năng");
            break;
        case "setting":
            echo ("Hiện đang bảo trì tính năng");
            break;


    }
    require_once ('view/footer.php');
?>