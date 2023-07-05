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
<body class="admin-body">
	<div class="container-fluid">
