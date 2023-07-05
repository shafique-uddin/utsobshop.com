<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="profile">
	<div class="row">
		<div class="col-md-2">
			<div class="member-left-sidebar">
				<?php include('member_left_sidebar.php'); ?>
			</div>
		</div>
		<div class="col-md-10">
			<div class="profile-right-sidebar">
				<table class="table">
					<tr>
						<th>Name</th>
						<td>md shafique uddin</td>
					</tr>
					<tr>
						<th>User ID</th>
						<td>017917346</td>
					</tr>
					<tr>
						<th>Position</th>
						<td>3rd Lavel</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>shofique32@gmail.com</td>
					</tr>
					<tr>
						<th>Referral ID</th>
						<td>auwal147</td>
					</tr>
					<tr>
						<th>Address</th>
						<td>Jabdipur, Fulbariget, Khulna</td>
					</tr>
				</table>
				<div class="password-update-form">
					<div class="title">
						<h5>Change Password</h5>
					</div>
					<form action="">
						<table class="table">
							<tr>
								<td>Current Password</td>
								<td>
									<input type="password" name="user_current_password" id="">
								</td>
							</tr>
							<tr>
								<td>New Password</td>
								<td>
									<input type="password" name="user_new_password" id="">
								</td>
							</tr>
							<tr>
								<td>Re-type New Password</td>
								<td>
									<input type="password" name="user_retypeNew_password" id="">
								</td>
							</tr>
						</table>
						<input type="submit" value="Update" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
