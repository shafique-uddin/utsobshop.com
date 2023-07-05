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
							<h4>Your Payable Amount Is: 3153 Tk.</h4>
							<h6>rocket Payment | How To Pay:</h6>
						</div>
					</div>
				</div>
				<div class="how-to-pay">
					<div class="row">
						<div class="col-md-12 text-left">
							<ul>
								<li>step 1: dial *322#.</li>
								<li>step 2: select payment option 1.</li>
								<li>step 3: select bill pay option 1.</li>
								<li>step 4: enter Biller ID 506.</li>
								<li>step 5: enter bill number 01791764346.</li>
								<li>step 6: enter amount 3153</li>
								<li>step 7: enter Secret PIN to confirm.</li>
								<li>step 8: you will get a confirmation SMS.</li>
							</ul>
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
