<?php
    class ProductController {
        private $productModel;
        public function __construct () {
            include_once ('../site/model/ProductModel.php');
            $this -> productModel = new ProductModel();
        }
        public function renderProduct(){
            $productAll = $this -> productModel ->getAllPro();
            //eprint_r($productAll);
            include_once('view/product.php');
        }
        public function renderAddProduct() {
            include_once('view/addpro.php');
        }
        public function addProduct($data){
            $this->productModel->addPro($data);
            header('Location:index.php?page=product');
        }
        public function renderEditProduct($id) {
            $product = $this ->productModel ->getProById($id);
            include_once('view/editpro.php');
        }
        public function editProduct($data){
            $this ->productModel ->editPro($data);
            header('location: index.php?page=product');
        }
        public function Delete($data) {
            $this ->productModel->DeleteProduct($data);
            header('location:index.php?page=product');
        }
    }
?>