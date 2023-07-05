<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="registration">

	<div class="row">
		<!-- LEFT COLUMN-->
		<div class="col-6">
			<aside>
				<div class="signup-form">
					<div class="row">
						<div class="col-md-6">
							<div class="shipping-title"><h4>Registration Details</h4></div>
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
									Referral ID
								</td>
								<td class="col-md-1">
									<input type="text" name="user_name" value="<?= set_value('user_name');?>" size="30">
								</td>
							</tr>
							<tr class="row">
								<td class="col-md-5">
									Name
								</td>
								<td class="col-md-1">
									<input type="text" name="user_name" value="<?= set_value('user_name');?>" size="30">
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
									Password
								</td>
								<td class="col-md-1">
									<input type="password" name="user_password" size="30">
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
									District/State
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
									Zip/Postal Code
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
									<textarea name="user_address" cols="34" rows="5"><?= set_value('user_address');?></textarea>
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
				<section id="package-product">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h3>Please select a product:</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table width="100%" class="table">
								<tr class="row">
									<th class="col-md-6">package name</th>
									<th class="col-md-2">price(Tk)</th>
									<th class="col-md-2">point</th>
									<th class="col-md-2">action</th>
								</tr>
								<tr class="row">
									<td class="col-md-6">
										<a href="<?php echo base_url('pro/genid/2');?>">facewash plush</a>
									</td>
									<td class="col-md-2">507</td>
									<td class="col-md-2">220</td>
									<td class="col-md-2"><a href="" class="btn btn-danger">buy</a></td>
								</tr>
								<tr class="row">
									<td class="col-md-6">
										<button class="btn">
											<a href="<?php echo base_url('progenid');?>">man facewash</a>
										</button>
									</td>
									<td class="col-md-2">507</td>
									<td class="col-md-2">320</td>
									<td class="col-md-2"><a href="" class="btn btn-danger">buy</a></td>
								</tr>
								<tr class="row">
									<td class="col-md-6">
										<a href="<?php echo base_url('progenid');?>">family fresh food</a>
									</td>
									<td class="col-md-2">5078</td>
									<td class="col-md-2">4200</td>
									<td class="col-md-2"><a href="" class="btn btn-danger">buy</a></td>
								</tr>
							</table>
						</div>
					</div>
				</section>
				<div class="checkout-summary">
					<div class="row">
						<div class="col-md-6">
							<div class="summary-title"><h4>Checkout Summary</h4></div>
						</div>
					</div>
					<table class="table">
						<tr class="row">
							<th class="col-md-6">Payment Details</th>
						</tr>
						<tr class="row">
							<td class="col-md-4">Subtotal</td>
							<td class="col-md-2 text-right">1000 Tk</td>
						</tr>
						<tr class="row">
							<td class="col-md-4">Shipping Charge</td>
							<td class="col-md-2 text-right"></td>
						</tr>
						<tr class="row">
							<td class="col-md-4">Total</td>
							<td class="col-md-2 text-right">1000 Tk</td>
						</tr>
					</table>
				</div>
			</aside>
		</div>
	</div>
	<!-- EMD RIGHT COLUMN-->

	<!-- BOTTOM PAYMENT METHOD -->
	<aside class="registration-page-bottom-payment-payment-method">
		<div class="title">
			<div class="row">
				<div class="col-md-12">
					<h4>please Chose your payment method</h4>

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
		<div class="registration-page-methods">
			<div class="row">
				<div class="col-md-5 offset-4">
					<ul>
						<li><input type="radio" name="payment_method" value="bkash" id="bkash"> <label for="bkash">bkash payment</label></li>
						<li><input type="radio" name="payment_method" value="rocket" id="rocket"> <label for="rocket">rocket payment</label></li>
					</ul>
				</div>
				<div class="col-md-3">
					<input type="submit" value="Continue To Payment" class="btn btn-danger">
				</div>
				</form>
			</div>
		</div>
	</aside>
	<!-- BOTTOM PAYMENT METHOD -->
</section>
