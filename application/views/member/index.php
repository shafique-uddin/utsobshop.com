<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="dashboard">
	<div class="row">
		<div class="col-md-2">
			<div class="member-left-sidebar">
				<?php include('member_left_sidebar.php'); ?>
			</div>
		</div>
		
		<div class="col-md-10">
			<div id="dashboard-page-top-section">
				<div class="row">
					<div class="col-md-1">
						<div class="update-notice">
							<span>Notice</span>
						</div>
					</div>
					<div class="col-md-11">
						<marquee behavior="scroll" direction="left" scrolldelay="200">Your scrolling text goes here</marquee>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="dashboard-center-sidebar">
						<table class="table table-striped">
							<tr>
								<th>position</th>
								<td>2nd</td>
							</tr>
							<tr>
								<th>team member</th>
								<td>378</td>
							</tr>
							<tr>
								<th>total balance</th>
								<td>4000 tk</td>
							</tr>
							<tr>
								<th>referral income</th>
								<td>547 tk</td>
							</tr>
							<tr>
								<th>lavel income</th>
								<td>28 tk</td>
							</tr>
							<tr>
								<th>resell point</th>
								<td>104 pt</td>
							</tr>
							<tr>
								<th>withdraw balance</th>
								<td>10000 tk</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="dashboard-right-sidebar">
								<table class="table table-striped">
									<tr>
										<th><img src="<?php echo base_url(); ?>assets/img/https.png" alt="">referral link</th>
									</tr>
									<tr>
										<td><?php echo base_url(); ?>auwal14</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="lotter">
								<h4>Lottery</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
