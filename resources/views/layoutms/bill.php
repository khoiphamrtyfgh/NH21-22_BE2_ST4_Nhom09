<?php
	include "header.php";

	$id_user = $_SESSION['user_id'];
?>
<center>
<h1> Your Bill</h1>
<table border="1">
    <?php
	$carts = $product->getAllProductByCart($id_user);
	//var_dump($carts);
	
	$tongtien = 0;
	$cartsnew = $product->getAllProductByCart($id_user);
	$id_tam = 1;
	foreach($cartsnew as $value){
		$tongtien = $tongtien + $value['pty']*$value['price'];
		
	?>
	<td>
        <center> <?php echo $id_tam++ ?></center>
        <center> <?php echo $value['name'] ?></center>
		<center> <img width ="70px" src="./img/<?php echo $value['image'];?>" alt=""> </center>
		<center> <?php echo $value['pty'] ?></center>
		<center> <?php echo number_format($value['price']) ?> VNĐ</center>
    </td>
	<?php 
	}
	?>
	</table>
</center>
<center><h1>Total bill</h1></center>
<center><h1><?php echo number_format($tongtien) ?> VNĐ</h1></center>

<?php
$cart->deleteCartAll($id_user);
include "footer.html";
?>