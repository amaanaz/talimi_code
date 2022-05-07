
	<div class="registration">
		<div class="container">
			<div class="signin-form profile">
				<h3>Login</h3>
				<div class="login-form">
					<form id="loginForm">
						<input type="text" name="username" id="username" placeholder="Username" required="">
						<input type="password" name="password" id="password" placeholder="Password" required="">
						<div class="tp">
							<button type="button" class="btn btn-primary btn-block"id="loginFormBtn">Sign In</button>
						</div>
					</form>
				</div>
				<!-- <div class="login-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<p><a href="registration.html"> Don't have an account?</a></p> -->
			</div>
		</div>
	</div>
	<style>
		.btn{
			outline: none;
			padding: 0.9em 0;
			width: 100%;
			text-align: center;
			font-size: 1em;
			margin-top: 1em;
			border: none;
			color: #FFFFFF;
			cursor: pointer;
			background: #86c724;
			box-shadow: 0px 2px 1px rgb(28 28 29 / 42%);
			border-radius: 22px;
		}
		.btn:hover{
			color: #fff;
			background: #212121;
			transition: .5s all;
			-webkit-transition: .5s all;
		}
	</style>
<?php $this->load->view('home-pages/login_js'); ?>