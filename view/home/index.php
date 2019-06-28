<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="<?= URL ?>template_login/images/img-01.png" alt="IMG">
			</div>

			<form class="login100-form validate-form" method="POST" action="login">
				<span class="login100-form-title">Member Login</span>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
				</div>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">Login</button>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="<?= URL ?>home/register">Create your Account<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></a>
				</div>
			</form>
		</div>
	</div>
</div>