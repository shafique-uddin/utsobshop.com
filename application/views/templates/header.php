<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> <?php echo ucwords($site_title); ?> </title>
	<?php
	echo link_tag('assets/css/owl.carousel.min.css');
	echo link_tag('assets/css/owl.theme.default.min.css');
	echo link_tag('assets/css/bootstrap.min.css');
	echo link_tag('assets/css/style.css');
	?>
</head>
<body>
	<div class="container">

		<!-- Header Section -->
		<header>
			<div class="row">
				<div class="col-md-3 logo">
					<figure>
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/assets/img/logo.png" alt=""></a>
					</figure>
				</div>
				<div class="col-md-6 text-center all-center">
					<form action="">
						<select name="category" id="category">
<?php 

if (count($all_cat_list)>0) {	?>
	<option value="items" selected>select category</option>
		<?php 
		foreach ($all_cat_list as $key => $value) { ?>
			<option value="<?php echo $value['cat_name']; ?>"><?php echo $value['cat_name']; ?></option>
		<?php
		}
	}
else {	?>
	<option value="items" selected></option>
<?php }

 ?>							
						</select>
						<input type="text" name="item_name">
						<input type="submit" value="Search">
					</form>
				</div>
				<div class="col-md-3">
					<ul id="regular-customer">
						<li><a href="<?php echo base_url('registration');?>">registration</a></li>
						<li><a href="<?php echo base_url('login');?>">login</a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- End Header Section -->

		<!-- Menubar Section -->
		<section id="top-menu">
			<div class="row">
				<div class="col-md-10">
					<ul id="menu-bar">
						<li><a href="<?php echo base_url();?>">home</a></li>
						<li><a href="<?php echo base_url('category');?>">category</a></li>
						<li><a href="">about</a></li>
						<li><a href="">contact</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="cart">
						<?php 
							if (isset($this->session->cart_no)) { ?>
							<a href="<?php echo base_url('cart'); ?>">my cart <span><img src="<?php echo base_url();?>assets/img/shoppingcart.png" alt="">
					<sup>

							<?php	echo count($this->session->cart_no);
							}
							else { ?>
								<a href="">my cart <span><img src="<?php echo base_url();?>assets/img/shoppingcart.png" alt="">
					<sup>
							<?php	echo "0";
							}
						 ?>
							</sup></span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Menubar Section -->
