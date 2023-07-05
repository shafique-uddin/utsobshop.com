<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Slider Section -->
<section id="slider-section">
	<div class="row">
		<div class="col-md-12">
			<div class="myslide-wrapper owl-carousel">
				<div class="item">
					<div style="background-image: url('<?php echo base_url();?>assets/img/ecommerce.jpg');height: 500px;width: 1140px; background-size: 100% 100%;"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Slider Section -->

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


<?php 

	if (count($all_pro_list)>0) { 
		rsort($all_pro_list);
		foreach ($all_pro_list as $key => $value) {
	 ?>



				<div class="item">
					<div class="item-wrappers">
						<div style="background-image: url('<?php echo base_url();?>uploads/<?php echo $value['product_img']; ?>');height: 150px;background-size: 100% 100%;width: 200px;">
						<div class="desc">
							<div class="title">
								<a href="<?php echo $value['post_id']; ?>"><?php echo $value['product_title']; ?></a>
							</div>
							price: <?php echo $value['product_price']; ?> tk. <br>
							point: <?php echo $value['product_point']; ?> <br>
							<div class="cart-details">
							

								<a href="<?php echo base_url("myshop/product/{$value['post_id']}"); ?>" class="btn btn-success float-left">Buy</a>


								<a href="<?php echo base_url("product/about/{$value['post_id']}");?>" class="btn btn-success float-right">Details</a>
							</div>
						</div>
					</div>
					</div>
				</div>


<?php	}
	}
	else {
		echo "Shop has no product yet.";
	}
 ?>




				
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
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
								<a href="<?php echo base_url('product/about/12');?>" class="btn btn-success float-right">Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Other Product Section -->
