<?php
class ProductController {
    private $productModel;
    public function __construct(){
        include_once("model/ProductModel.php");
        $this -> productModel = new ProductModel();
    }
    public function renderHome(){
        $productHot = $this->productModel ->getHotPro();
        // San pham theo id danh muc 1 hoac 2
        $proCate1 = $this->productModel -> getProByCate(3);
        $proCate2 = $this->productModel -> getProByCate(4);
        $productSales = $this ->productModel ->getProByCate(7);
        // print_r($proCate1);
        require_once("view/home.php");
    }
    public function renderProduct () {
        $productAll = $this->productModel ->getProByCate(8);
        require_once("view/product.php");
    }
}
?>