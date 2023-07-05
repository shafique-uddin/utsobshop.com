<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin-dashboard">
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
						<h3>admin dashboard</h3>
					</div>
				</div>
			</div>


			<div class="admin-dashboard-right-sidebar">
				<div class="row">

					<div class="col-md-4">
						<div class="items">
							<div class="upper-content">
								<div class="row">
									<div class="col-md-4">
										<figure class="float-left">
											<img src="<?php echo base_url(); ?>assets/img/pending_order.png" alt="">
										</figure>
									</div>
									<div class="col-md-8 float-right">
										<div class="order-quantity">20</div>
										<h6>pending Order</h6>
									</div>
								</div>
							</div>
							<div class="lower-content">
								<a href="">View Details</a>
							</div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="items">
							<div class="upper-content upcoming-product">
								<div class="row">
									<div class="col-md-3">
										<figure class="float-left">
											<img src="<?php echo base_url(); ?>assets/img/upcoming_product.png" alt="">
										</figure>
									</div>
									<div class="col-md-9 float-right">
										<div class="order-quantity">20</div>
										<h6>pending upcoming product Order</h6>
									</div>
								</div>
							</div>
							<div class="lower-content upcoming-product-a">
								<a href="">View Details</a>
							</div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="items">
							<div class="upper-content pending-payments">
								<div class="row">
									<div class="col-md-3">
										<figure class="float-left">
											<img src="<?php echo base_url(); ?>assets/img/pending_payments.png" alt="">
										</figure>
									</div>
									<div class="col-md-9 float-right">
										<div class="order-quantity">20</div>
										<h6>pending payments</h6>
									</div>
								</div>
							</div>
							<div class="lower-content pending-payments-a">
								<a href="">View Details</a>
							</div>
						</div>
					</div>

					

				</div>
			</div>
		</div>
	</div>
</section>
