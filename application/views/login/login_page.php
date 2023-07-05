<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="login">
	<div class="title">
		<div class="row">
			<div class="col-md-12 text-center">
				<h4>Welcome to Utsab Shop.</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<aside class="left-side-column">
				<div class="row">
					<div class="col-md-12">
						<div class="login-title" style="background-image: url('<?php echo base_url(); ?>assets/img/login_icon.png'); background-repeat: no-repeat;">
							<h4>member login</h4>
						</div>
					</div>
				</div>
				<div class="login-form">
					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<table>
									<tr class="row">
										<td class="col-md-6">
											User Name
										</td>
										<td class="col-md-6">
											<input type="text" name="user_id" size="25">
										</td>
									</tr>
									<tr class="row">
										<td class="col-md-6">
											Password
										</td>
										<td class="col-md-6">
											<input type="password" name="user_password" size="25">
										</td>
									</tr>
									<tr class="row">
										<td class="col-md-6"><a href="" class="text-muted">Forget Password</a></td>
										<td class="col-md-6">
											<input type="submit" value="Login" class="btn btn-success">
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</aside>
		</div>
		<div class="col-md-6">
			<aside class="right-side-column">
				<div class="row">
					<div class="col-md-12">
						<p> <img src="<?php echo base_url(); ?>assets/img/notes.png" alt=""> If you are not register member and also interested to join with us then please complete <a href="<?php echo base_url('registration');?>" class="btn btn-success">registration</a></p>
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>
