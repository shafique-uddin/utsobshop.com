<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin-profile">
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
						<h3>admin profile</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="admin-profile-center-sidebar">
						<div class="title">
							<h5>Change Personal Info</h5>
						</div>
						<form action="">
							<table class="table">
								<tr>
									<td>User ID</td>
									<td>
										<input type="text" name="admin_user_id" value="017917346">
									</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>
										<input type="email" name="admin_user_email" value="shofique32@gmail.com">
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<input type="submit" value="Update Info" class="btn btn-success">
									</td>
								</tr>
							</table>
						</form>	
					</div>
				</div>
				<div class="col-md-6">
					<div class="admin-profile-right-sidebar">
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
									<tr>
										<td>&nbsp;</td>
										<td>
											<input type="submit" value="Update Password" class="btn btn-danger">
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>
