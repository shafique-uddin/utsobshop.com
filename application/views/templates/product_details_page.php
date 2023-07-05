<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
if (count($single_pro_details)<=1) {
	foreach ($single_pro_details as $key => $value) {
 ?>
<!-- Product Details Section -->
<section id="product-details-section">
	<div class="row">
		<!-- LEFT COLUMN -->
		<div class="col-md-4">
			<div class="product-gallery">
				<div class="featured-image">
					<figure>
						<img src="<?php echo base_url();?>uploads/<?php echo $value['product_img']; ?>" alt="">
					</figure>
				</div>
			</div>
		</div>
		<!-- END LEFT COLUMN -->

		<!-- RIGHT COLUMN -->
	
		<div class="col-md-8">
			<div class="product-details">
				<div class="product-title">
					<h3><?php echo $value['product_title']; ?></h3>
				</div>
				<div class="product-category">
					<p>Category Name : <?php echo $value['product_cat']; ?></p>
				</div>
				<div class="product-price">
					Price : <?php echo $value['product_price']; ?> Tk.
				</div>
				<div class="product-point">
					Point : <?php echo $value['product_point']; ?> Pt.
				</div>
				<div class="availability">
					Availability:<?php echo $value['product_quantity']; ?>.
				</div>
				<div class="buy">
					<form action="">
						quantity : <input type="number" name="quantity" value="1" min="1" max="<?php echo $value['product_quantity']; ?>"> <br>
						<a href="" class="btn btn-success"><img src="<?php echo base_url(); ?>assets/img/shoppingcart.png" alt="">add to cart</a>
					</form>
				</div>
			</div>
		</div>
		<!-- END RIGHT COLUMN -->		
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="product-short-desc">
				<h3>short description</h3>
				<pre><?php echo $value['product_summary']; ?></pre>
			</div>
		</div>
	</div>

</section>
<!-- End Product Details Section -->
<?php } }  ?>
