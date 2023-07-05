<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin-product-category">
	<div class="row">
		<div class="col-md-2">
			<div class="member-left-sidebar">
				<?php include('admin_left_sidebar.php'); ?>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title">
						<h3>Product Category</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="admin-product-category-center-sidebar">
						<div class="title">
							<h5>Add category</h5>
							<?php 

								if (isset($alert)) { ?>
									<div class="error-message">
										<?php echo $alert; ?>
									</div>
								<?php } 
							?>
						</div>
						<form action="<?php echo base_url('ProductCategoryTag'); ?>" method="post">
							<table class="table">
								<tr>
									<td>Category Name</td>
									<td>
										<input type="text" name="product_category_name">
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<input type="submit" value="Add Category" class="btn btn-success">
									</td>
								</tr>
							</table>
						</form>	
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="admin-product-category-delete-sidebar">


<?php 
if (isset($cat_list)) { 
 ?>
						<div class="title">
							<h5>category list (<?php echo count($cat_list); ?>)</h5>
						</div>

						<form action="">
							

							<div class="row">
									<div class="col-md-12">
										<div class="wrapper">

<?php 


	foreach ($cat_list as $key => $value) {
		$link_id = $value['cat_id'];

	  ?>
		<a href="<?php echo base_url("procat/pno/$link_id");?>" class="btn btn-danger"><?php echo $value['cat_name']; ?><img src="<?php echo base_url(); ?>/assets/img/delete.png" alt=""></a>
<?php	}
}
 ?>

											




											
										</div>

										
									</div>
								</div>



						</form>	
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>
