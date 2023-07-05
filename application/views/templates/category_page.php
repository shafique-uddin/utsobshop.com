<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Category Section -->
<section id="category-section">
	<div class="row">
		<div class="col-md-12">
			<div class="header-title"><h4>Category</h4></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
<?php 	if (count($all_cat_list)>0) {
			foreach ($all_cat_list as $key => $value) {
 ?>
			<a href="category/product/<?php echo $value["cat_name"];?>" class="btn btn-success"><?php echo $value['cat_name']; ?></a>
<?php	} 	} ?>
		</div>
	</div>



</section>
<!-- End Category Section -->

<!-- All New Products Section -->
<section class="products">
	<div class="row">
		<div class="col-md-12">
			<div class="header-title"><h4>All new products</h4></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="owl-carousel">
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End All New Products Section -->

<!-- Other Product Section -->
<section class="products">
	<div class="row">
		<div class="col-md-12">
			<div class="header-title"><h4>Cosmetics</h4></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="owl-carousel">
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Other Product Section -->

<!-- Other Product Section -->
<section class="products">
	<div class="row">
		<div class="col-md-12">
			<div class="header-title"><h4>health products</h4></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="owl-carousel">
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/hand_wash.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/hand_wash.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/product_9_1_thumb.png');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="">product Name is jines pro</a>
							</div>
							price: 1500 tk. <br>
							point: 500 <br>
							<div class="cart-details">
								<button class="btn btn-success float-left">Buy</button>
								<button class="btn btn-success float-right">Details</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Other Product Section -->
