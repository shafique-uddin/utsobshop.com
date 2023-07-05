<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Category Title Section -->
<section id="category-product-section">
	<div class="row">
		<div class="col-md-12">
			<div class="header-title">
				<?php 
					if (strlen($single_cat_name)>0) { ?>
						<h4>Category Name: <?php echo $single_cat_name; ?></h4>
				<?php	}
				 ?>
			</div>
		</div>
	</div>
</section>
<!-- End Category Title Section -->

<!-- Products Section According To Category -->
<section class="category-product-page">
	<div class="row">



<?php 
if (count($all_pro_list_by_cat)>0) {
	foreach ($all_pro_list_by_cat as $key => $value) { ?>



		<div class="col-md-3">
			<div class="item-product">
				<figure>
					<img src="<?php echo base_url();?>uploads/<?php echo $value['product_img']; ?>" alt="">
				</figure>
				<div class="desc">
					<div class="title">
						<a href=""><?php echo $value['product_title']; ?></a>
					</div>
					price: <?php echo $value['product_price']; ?> tk. <br>
					point: <?php echo $value['product_point']; ?> <br>
					<div class="cart-details">
						<button class="btn btn-success float-left">Buy</button>
						<a href="<?php echo base_url("product/about/{$value['post_id']}");?>" class="btn btn-success float-right">Details</a>
					</div>
				</div>
			</div>
		</div>


<?php 

	}
}
else {
	echo "Have not any product in this category";
}
 ?>


	</div>
</section>
<!-- End All New Products Section -->
