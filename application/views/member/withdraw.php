<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="withdraw">
	<div class="row">
		<div class="col-md-2">
			<div class="member-left-sidebar">
				<?php include('member_left_sidebar.php'); ?>
			</div>
		</div>
		<div class="col-md-10">
			<div class="withdraw-right-sidebar">
				<div class="withdraw-notice">
					<h5>Payment notice</h5>
					<ul>
						<li>date of payment in each month: 6-10 & 21-25.</li>
						<li>Minimum Withdrawal balance: 700 Tk.</li>
					</ul>
				</div>

				<div class="withdraw-form">
					<h5>Withdrawal Process</h5>
					<form action="">
						<table class="table">
							<tr>
								<td>amount</td>
								<td>
									<input type="text" name="member_withdraw_amount" id="">
								</td>
							</tr>
							<tr>
								<td>Methods of Payment</td>
								<td>
									<select name="member_withdraw_method" id="">
										<option selected>Please Select Your Payment Method</option>
										<option value="bkash">bkash</option>
										<option value="rocket">rocket</option>
										<option value="bank">Bank</option>
									</select>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
