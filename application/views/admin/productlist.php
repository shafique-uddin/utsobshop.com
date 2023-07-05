<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin-productlist-page">
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
						<img src="<?php echo base_url();?>assets/img/listofproduct.png" alt=""><h3>List Of Product</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="admin-productlist-page-center-sidebar">
						<div class="row">
							<div class="col-md-12">							
								<table class="table">
									<tr>
										<th>Product Name</th>
										<th>Price</th>
										<th>Point</th>
										<th>Featured Image</th>
										<th>Category</th>
									</tr>


<?php 
if (count($list_of_pro)>0) {
	foreach ($list_of_pro as $key => $value) { ?>


									<tr>
										<td>
											<?php echo $value['product_title']; ?> <br>
											<ul>
												<li><a href="">edit</a></li>
												<li><a href="">delete</a></li>
											</ul>
										</td>
										<td><?php echo $value['product_price']; ?> Tk</td>
										<td><?php echo $value['product_point']; ?> Pv</td>
										<td><img src="<?php echo base_url();?>uploads/<?php echo $value['product_img']; ?>" alt=""></td>
										<td><?php echo $value['product_cat']; ?></td>
									</tr>

<?php }
}
?>


									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
