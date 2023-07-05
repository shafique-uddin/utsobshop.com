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
							<option value="items" selected>select category</option>
							<option value="items">health product</option>
							<option value="items">cosmetics</option>
							<option value="items">books</option>
							<option value="items">electronics</option>
						</select>
						<input type="text" name="item_name">
						<input type="submit" value="Search">
					</form>
				</div>
				<div class="col-md-3">
					<ul id="regular-customer">
						<li><a href="<?php echo base_url('registration');?>">registration</a></li>
						<li><a href="<?php echo base_url('login');?>">logout</a></li>
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
						<a href="">my cart <span><img src="<?php echo base_url();?>assets/img/shoppingcart.png" alt=""><sup>0</sup></span></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Menubar Section -->
