<section id="admin-login">
	<div class="admin-login-form">
		<div class="row">
			<div class="col-md-12">
				<div class="table-wrapper">
					<form action="<?php echo base_url('owner/error'); ?>" method="post" >
						<table class="table" style="width: 50%;height: auto;">
							<?php 
								if (null !== validation_errors()) { ?>
									<tr>
										<td colspan="2">
											<?php echo validation_errors(); ?>
										</td>
									</tr>
							<?php	}
								if (isset($login_error_info)) { ?>
									<div class="error-message">
										<?php echo $login_error_info; ?>
									</div>
							<?php	}
							 ?>
							<tr>
								<td>User ID</td>
								<td>
									<input type="text" name="admin_User_ID" id="">
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>
									<input type="email" name="admin_User_email" id="">
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>
									<input type="password" name="admin_User_password" id="">
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="submit" value="Login" class="btn btn-success float-right">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>