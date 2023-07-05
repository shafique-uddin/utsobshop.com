<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="checkout">
	<div class="row">
		<!-- LEFT COLUMN-->
		<div class="col-6">
			<aside>
				<div class="signup-form">
					<div class="row">
						<div class="col-md-6">
							<div class="shipping-title"><h4>Customer Details</h4></div>
						</div>
					</div>

					<!-- VALIDATION ERROR  AREA -->
					<?php
						if (isset($error)) {

							?>
							<div class="error-message"><?php echo $error; ?></div>
							<?php
						}
					?>
					<!-- END VALIDATION ERROR AREA -->

					<form action="<?php echo base_url('checkout/payment');?>" method="POST">
						<table class="table">
							<tr class="row">
								<td class="col-md-5">
									Name
								</td>
								<td class="col-md-1">
									<input type="text" name="normal_user_name" value="<?= set_value('user_name');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Email
								</td>
								<td class="col-md-1">
									<input type="email" name="user_mail" value="<?= set_value('user_mail');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Phone Number
								</td>
								<td class="col-md-1">
									<input type="text" name="user_mobile" value="<?= set_value('user_mobile');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Country
								</td>
								<td class="col-md-1">
									<input type="text" name="user_country" value="<?= set_value('user_country');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									District
								</td>
								<td class="col-md-1">
									<input type="text" name="user_district" value="<?= set_value('user_district');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									City
								</td>
								<td class="col-md-1">
									<input type="text" name="user_city" value="<?= set_value('user_city');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Postal Code
								</td>
								<td class="col-md-1">
									<input type="text" name="user_postal_code" value="<?= set_value('user_postal_code');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Address
								</td>
								<td class="col-md-1">
									<textarea name="user_address" cols="32" rows="5"><?= set_value('user_address');?></textarea>
								</td>
							</tr>
						</table>
				</div>
			</aside>
		</div>
	<!-- END LEFT COLUMN-->

	<!-- RIGHT COLUMN-->
		<div class="col-6">
			<aside>
				<div class="checkout-summary">
					<div class="row">
						<div class="col-md-6">
							<div class="summary-title"><h4>Checkout Summary</h4></div>
						</div>
					</div>
					<table class="table" width="100%">
						<tr class="row table-active">
							<th class="col-md-12 text-center">Payment Details</th>
						</tr>
						<tr class="row">
							<td class="col-md-6">Subtotal</td>
							<td class="col-md-6 text-right">
								<?php
									if (isset($sub_total_price)) {
									 	echo $sub_total_price; 
									 } 
								?> Tk
							</td>
						</tr>
						<tr class="row">
							<td class="col-md-6">Shipping Charge</td>
							<td class="col-md-6 text-right"></td>
						</tr>
						<tr class="row table-info">
							<td class="col-md-6">Total</td>
							<td class="col-md-6 text-right">1000 Tk</td>
						</tr>
					</table>
				</div>

				<aside class="right-side-column-payment-method">
					<div class="title">
						<div class="row">
							<div class="col-md-12">
								<h4>Chose your payment method</h4>

								<!-- VALIDATION ERROR  AREA -->
								<?php
								if (isset($error)) {

									?>
									<div class="error-message">Please Select a Payment Option.</div>
									<?php
								}
								?>
								<!-- END VALIDATION ERROR AREA -->

							</div>
						</div>
					</div>
					<div class="methods">
						<div class="row">
							<div class="col-md-12 text-left">
									<input type="radio" name="payment_method" value="bkash" id="bkash">
									<label for="bkash">bkash payment</label>
									<br>
									<input type="radio" name="payment_method" value="rocket" id="rocket">
									<label for="rocket">rocket payment</label>
									<input type="submit" value="Continue To Payment" class="btn btn-danger">
								</form>
							</div>
						</div>
					</div>
				</aside>
			</aside>
		</div>
	</div>
	<!-- EMD RIGHT COLUMN-->

</section>
