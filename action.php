<?php
require_once 'vendor\autoload.php';

use App\classes\Home;
use App\classes\Category;
use App\classes\Product;

$product = new Product();

$category = new Category();
$categories = $category->allCategory();

if (isset($_GET['page'])) {
    if($_GET['page'] ==  'home') {

        $products = $product->allProduct();
        include 'pages/home.php';

    }elseif ($_GET['page'] ==  'category') {

        $cat_id = $_GET['id'];
        $catProduct = $product->categoryProduct($cat_id);

        include 'pages/category.php';
    }elseif ($_GET['page']=='product') {

        $products = $product->allProduct();

        include 'pages/product.php';

    } elseif($_GET['page'] == 'details') {

        $product_id = $_GET['id'];
        $productDetails = $product->detailsProduct($product_id);
        include 'pages/detalis.php';

    }elseif ($_GET['page'] == 'contact') {

        include 'pages/contact.php';
    }elseif ($_GET['page'] == 'about') {

        include 'pages/about.php';
    }
}