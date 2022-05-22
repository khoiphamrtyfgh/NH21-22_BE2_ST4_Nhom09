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


$carts = $product->getAllProductByCart($_SESSION['user_id']);
if(isset($_GET['id'])){
	foreach($carts as $value){
		if($value['id_product'] == $_GET['id']){
            if($value['pty'] == 1){
                $cart->deleteCart1($_SESSION['user_id'], $value['id_product']);
                break;
            }else{
                $tam1 = $value['pty'] - 1;
			    $cart->updateCart($_SESSION['user_id'], $value['id_product'], $tam1);
			    break;
            }
			
		}
	}
}
header('location:addcart.php');