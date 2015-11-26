<?php  defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Register - Chawri</title>
    
    
    <link rel="stylesheet" href="<?php echo asset_url();?>css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="<?php echo  asset_url();?>css/style.css">
  </head>
  <body>
  <?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<!-- Form Mixin-->
<!-- Pen Title-->
<div class="pen-title">
<!--    <h1>Login</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>-->
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Register</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
      <?php echo form_open('users'); ?>
      <input type="text" placeholder="Your Email"  name="user_name_email" id="username_email"/>
      <input type="password" placeholder="Password" name="password" id="password"/>
      <?php echo form_hidden('todo', 'login'); ?>
      <input type="submit" name="submit" value="Login" id="submit_button"  />
      <?php echo form_close(); ?>

      <a href="<?=base_url()?>users/forgotMail" style="align-self: center"> Forgot Pwd</a>
    <a href="<?=base_url()?>sellers" style="align-self: center"> Seller Register</a>
  </div>
  <div class="form">
    <h2>Create an account</h2>
      <?php echo validation_errors(); ?>
      <?php echo form_open('users'); ?>
      <input type="email" placeholder="Username" name="user_name_email" id="user_name_email"/>
      <input type="password" placeholder="Password" name="password" id="password"/>
      <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password"/>
     <!-- <select name="user_level" id="user_level" >
          <option value="">Select Account type</option>
          <?php /*foreach($roles as $role_id=>$role) {*/?><option value=<?/*=$role_id*/?>><?/*=ucfirst($role)*/?></option><?php /*}*/?>
      </select>-->
      <?php echo form_hidden('todo', 'register'); ?>
      <!--<input type="tel" placeholder="Phone Number"/>-->
      <button>Register</button>
    </form>
  </div>

  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo asset_url();?>js/index.js"></script>
  </body>
</html>
