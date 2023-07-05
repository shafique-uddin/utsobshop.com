<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin-product-page">
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
						<h3>Product Page</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="product-list-title">
						<h3>To check or Edit products please visit <a href="product-list" class="btn btn-danger">product list</a></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="admin-product-page-center-sidebar">
						<div class="row">
							<div class="col-md-12">
								<div class="post-error-message">
									<?php echo validation_errors(); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								
								<div class="post-product">
									<?php 
										if (isset($error)) { ?>
										<div class="post-error-message">
											<?php echo $error['error']; ?>
										</div>
										<?php } ?>

										<?php echo form_open_multipart('post-result');
									?>
									
										<div class="row">
											<div class="col-md-12">
												<input type="text" name="post_product_title" placeholder="Product Title" size="100">
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<label for="post_price">Price</label> <br> <input type="text" name="post_product_price" id="post_price" size="10" placeholder="Price">
											</div>
											<div class="col-md-2">
												<label for="post_point">Point</label> <br> <input type="text" name="post_product_point" id="post_point" size="10" placeholder="Point">
											</div>



											<div class="col-md-2">
												<label for="post_product_quantity">Product Quantity</label> <br> <input type="number" name="post_product_quantity" id="post_product_quantity" placeholder="10">
											</div>

						<div class="col-md-6">
							<label for="post_cat">Category</label> <br>
							<select name="post_product_cat" id="post_cat">
								<?php 
									if (count($cat_list_name)>0) { ?>
									<option selected>please select</option>
									<?php
										foreach ($cat_list_name as $key => $value) {
										 ?>
								<option value="<?php echo $value["cat_name"]; ?>"><?php echo $value['cat_name']; ?></option>
								<?php		}
									}
								 ?>
							</select>
						</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-prodcut-article">
													<textarea name="post_product_article" id="" cols="116" rows="10"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-2">
														<p class="featured_img">featured image</p>
													</div>
													<div class="col-md-10">
														<input type="file" name="post_product_featured_image" class="featured_img">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-2">
														<p class="pro_type_title">product type</p>
													</div>
													<div class="col-md-10 pro_type_dsc">
														<li><input type="checkbox" name="pro_type" value="general" id="general" checked> <label for="general">general product</label></li>
														<li><input type="checkbox" name="pro_type" value="package" id="package"> <label for="package">package product</label></li>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="submit" value="Publish" class="btn btn-danger">
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
