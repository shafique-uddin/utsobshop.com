<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="payment">
	<div class="row">
		<!-- LEFT COLUMN-->
		<div class="col-6">
			<aside class="left-side-column">
				<div class="title">
					<div class="row">
						<div class="col-md-12">
							<h4>Your Payable Amount Is: <?php echo $sub_total_price; ?> Tk.</h4>
							<h6>bkash Payment | How To Pay:</h6>
						</div>
					</div>
				</div>
				<div class="how-to-pay">
					<div class="row">
						<div class="col-md-12 text-left">
							<ul>
								<li>step 1: dial *247#.</li>
								<li>step 2: select payment option 3.</li>
								<li>step 3: enter merchant bkash account number 01791764346.</li>
								<li>step 4: enter amount <?php echo $sub_total_price; ?></li>
								<li>step 5: enter reference AUWAL</li>
								<li>step 6: ENTER counter no 1</li>
								<li>step 7: enter menu PIN to confirm.</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-left">
							<div class="transaction-details">
								<form action="<?php echo base_url('Thank-You');?>" method="POST">
									<table>
								<!-- VALIDATION ERROR  AREA -->
									<?php if (isset($error)) {	?>
										<tr>
											<td>
												<div class="error-message">
													<?php echo $error; ?>
												</div>
											</td>
										</tr>
									<?php }	?>
								<!-- END VALIDATION ERROR AREA -->
										
										<tr class="row">
											<td class="col-md-6">
												Amount
											</td>
											<td class="col-md-6">
												<input type="text" name="user_payment_amount" size="19">
											</td>
										</tr>
										<tr class="row">
											<td class="col-md-6">
												Your bkash Mobile No
											</td>
											<td class="col-md-6">
												<input type="text" name="user_bkash_no" size="19">
											</td>
										</tr>
										<tr class="row">
											<td class="col-md-6">
												bkash Transaction ID
											</td>
											<td class="col-md-6">
												<input type="text" name="user_transaction_ID" size="19">
											</td>
										</tr>
										<tr class="row">
											<td class="col-md-6">&nbsp;</td>
											<td class="col-md-6">
												&nbsp;
											</td>
										</tr>
										<tr class="row">
											<td class="col-md-6">&nbsp;</td>
											<td class="col-md-6 text-right">
												<input type="submit" value="Confirm Order" class="btn btn-success float-right">
											</td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
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
							<td class="col-md-6 text-right"><?php echo $sub_total_price; ?> Tk</td>
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
			</aside>
		</div>
	</div>
	<!-- EMD RIGHT COLUMN-->

</section>
