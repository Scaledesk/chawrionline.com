
	<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<!-- 		<div class="padding-15">

			<div class="login-box"> -->

				<!-- login form -->
				<!-- <form action="<?php echo 'users';?>" method="post" class="sky-form boxed"> -->
					<!-- <header><i class="fa fa-users"></i> Sign In</header> -->

					<!--
					<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
						Invalid Email or Password!
					</div>

					<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
						Account Inactive!
					</div>

					<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
						<strong>Too many failures!</strong> <br />
						Please wait: <span class="inlineCountdown" data-seconds="180"></span>
					</div>
					-->

				<!-- 	<fieldset>	
					
						<section>
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope"></i>
								<input type="email" name="user_name_email">
								<span class="tooltip tooltip-top-right">Email Address</span>
							</label>
						</section>
						
						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password" name="password">
								<b class="tooltip tooltip-top-right">Type your Password</b>
								<?php echo form_hidden('todo', 'login'); ?>
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked=""><i></i>Keep me logged in</label>
						</section>

					</fieldset>

					<footer>
						<button type="submit" class="btn btn-primary pull-right">Sign In</button>
						<div class="forgot-password pull-left">
							<a href="page-password.html">Forgot password?</a> <br>
							<a  href="<?php echo base_url().'users/register';?>"><b>Need to Register?</b></a>
							<a  href="<?php echo base_url().'sellers';?>"><b>Need to Sellers Register?</b></a>
						</div>
					</footer>
				</form> -->
				<!-- /login form -->

				

				<!--<div class="text-center">
					Or sign in using:
				</div>
-->
<!--
				<div class="socials margin-top-10 text-center"><!-- more buttons: ui-buttons.html --
					<a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				</div>
-->
<!-- 			</div>

		</div>

		<!-- JAVASCRIPT FILES --
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets\js\app.js"></script>
	</body>
</html>

 -->




<div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-login">
                                            <div class="page-title em-box-02">
                                                <div class="title-box">
                                                    <h1>Login or Create an Account</h1>
                                                </div>
                                            </div>
                                            <form action="<?php echo 'users';?>" method="post" id="login-form">
                                                <input name="form_key" type="hidden" value="W2ZAZqxDCT2TpZYs">
                                                <div class="col2-set">
                                                    <div class="col-1 new-users">
                                                        <div class="content">
                                                            <h2>New Customers</h2>
                                                            <p>By creating an account with our store, you will be able to move through the checkout , view and track your orders in your account and more.</p>
                                                        </div>
                                                        <div class="buttons-set">
                                                            <button type="button" title="Create an Account" class="button"><span><span><a href="<?php echo base_url().'users/register';?>">Create an Account</a></span></span>
                                                            </button>
                                                        </div>
                                                        
                                <div class="content">
                                                            <h2>New Sellers</h2>
                                                            <p>By creating an Seller account with our store, you will be able to Sell , view and track your orders Online and more.</p>
                                                        </div>
                                                        
                                <div class="buttons-set">
                                                            <button type="button" title="Create an Account" class="button"><span><span><a  href="<?php echo base_url().'sellers';?>">Create Seller Account</a></span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 registered-users">
                                                        <div class="content">
                                                            <h2>Registered Customers</h2>
                                                            <p>If you have an account with us, please log in.</p>
                                                            <ul class="form-list">
                                                                <li>
                                                                    <label for="email" class="required"><em>*</em>Email Address</label>
                                                                    <div class="input-box">
                                                                        <input type="text" name="user_name_email" required value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label for="pass" class="required"><em>*</em>Password</label>
                                                                    <div class="input-box">
                                                                        <input type="password" name="password"  required class="input-text required-entry validate-password" id="pass" title="Password">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <?php echo form_hidden('todo', 'login'); ?>
                                                            <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                                                            <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                                                                <div class="remember-me-popup-head">
                                                                    <h3>What's this?</h3> <a href="#" class="remember-me-popup-close" title="Close">Close</a>
                                                                </div>
                                                                <div class="remember-me-popup-body">
                                                                    <p>Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
                                                                    <div class="remember-me-popup-close-button a-right"> <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons-set">
                                                            <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span>
                                                            </button> <a href="<?php echo base_url().'users/showForgetPwd';?>" class="f-left">Forgot Your Password?</a>
                                                            <p class="required">* Required Fields</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- /.account-login -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>