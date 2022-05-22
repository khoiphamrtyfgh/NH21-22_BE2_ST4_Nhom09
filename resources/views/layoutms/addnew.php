<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
$protype = new Protype;
$product = new Product;
$cart = new Cart;
$user = new User;
$getAllProducts = $product->getAllProducts();
$getAllProtype = $protype->getAllProtype();


$carts = $product->getAllProductByCart($_SESSION['id_user']);
if(isset($_GET['id'])){
    $cart->addCart($_SESSION['id_user'], $_GET['id'] , 1);
}

header('location:addcart.php');