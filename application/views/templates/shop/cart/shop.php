<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="cart">

<!-- Cart Details Section -->
	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo base_url("cart/update"); ?>" method="post">
			<table class="table-striped table-dark table-bordered" width="100%">
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Total</th>
				</tr>

<?php

if ($this->session->userdata('cart_no')) {

	$sub_total_value = 0;
	$update_cart_info = $this->session->userdata('cart_no');
		foreach ($cart_details as $key => $product_details) {
			foreach ($product_details as $key => $pro_details_value) {
				foreach ($update_cart_info as $key => $value) {
					if ($key == $pro_details_value['post_id']) {
						$product_price = $pro_details_value['product_price']*$value;
						?>

<tr class="text-center">
					<td width="10%"><img src="<?php echo base_url(); ?>/uploads/<?php echo $pro_details_value['product_img']; ?>" alt=""></td>
					<td width="45%" class="proName"><?php echo $pro_details_value['product_title']; ?></td>
					<td width="25%">

<input class="btn btn-primary" type="number" name="product_qantity[]" value="<?php echo $value;?>" max="<?php echo $pro_details_value['product_quantity']; ?>">
<input type="hidden" name="id[]" value="<?php echo $pro_details_value['post_id']; ?>">

<input type="submit" class="btn btn-success" value="Update">
</form>
<a href="<?php echo base_url('cart/delete'); ?>/<?php echo $pro_details_value['post_id']; ?>" style="display:hidden">
<img src="<?php echo base_url();?>assets/img/product_delete.png" alt="">
</a>

					</td>
					<td width="10%"><?php echo $pro_details_value['product_price']; ?></td>
					<td width="10%"><?php echo $product_price; $sub_total_value += $product_price; ?></td>
</tr>

						<?php
					}
				}
			}
		}
	}
else {

	foreach ($cart_details as $key => $product_details) {
			foreach ($product_details as $key => $pro_details_value) {
				foreach ($pro_details_value as $key => $value) { ?>

<tr class="text-center">
					<td width="10%"><img src="<?php echo base_url(); ?>/uploads/<?php echo $pro_details_value['product_img']; ?>" alt=""></td>
					<td width="45%" class="proName"><?php echo $pro_details_value['product_title']; ?></td>
					<td width="25%">
<!-- <form action="<?php //echo base_url("cart/update"); ?>" method="post"> -->
<input class="btn btn-primary" type="number" name="product_qantity[]" value="1" max="<?php echo $pro_details_value['product_quantity']; ?>">
<input type="hidden" name="id[]" value="<?php echo $pro_details_value['post_id']; ?>">

<input type="submit" class="btn btn-success" value="Update">
</form>
<a href="cart/delete/id">
<img src="<?php echo base_url();?>assets/img/product_delete.png" alt="">
</a>

					</td>
					<td width="10%"><?php echo $pro_details_value['product_price']; ?></td>
					<td width="10%"><?php 
if (isset($update_price)) {
	echo $update_price;
}
else {
	echo $pro_details_value['product_price'];
}
					 ?></td>
</tr>
				

<?php
				continue 2;
				}
			}
		}
	}
 ?>

				<tr>
					<td colspan="4" class="text-right">Sub Total:</td>
					<td class="subTotal">
						<?php 
if (isset($sub_total_value)) {
	echo $sub_total_value;
	$sub_total_price = $this->session->sub_total_price;
	$sub_total_price[] = $sub_total_value;
	$this->session->set_userdata('sub_total_price',$sub_total_price);
}
						 ?>
					</td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">Point:</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">Total:</td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
<!-- End Cart Details Section -->

<!-- Continue With Cart Details Section -->
	<div class="row">
		<div class="col-md-12 text-right">
			<a type="button" class="btn btn-danger" href="<?php echo base_url('checkout');?>">Checkout</a>
		</div>
	</div>
<!-- End Continue With Cart Details Section -->
</section>
