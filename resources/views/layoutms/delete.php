<!-- xóa đơn hàng -->
<?php
session_start();

unset($_SESSION['cart'][$_GET['id']]);

header('location:addcart.php');
?>