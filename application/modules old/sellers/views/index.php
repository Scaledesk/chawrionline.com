<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/12/2015
 * Time: 5:48 PM
 */?>


<?php  defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title> Seller Register - Chawri</title>


    <link rel="stylesheet" href="<?php echo asset_url();?>css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="<?php echo  asset_url();?>css/style.css">
    <style type="text/css">

        body{
            margin: 0 auto;
            padding: 0px;
        }
        .form{
            margin: 0 auto;
        }
    </style>
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


    <div class="form">
        <h2>Create Sellers an account</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('sellers'); ?>
        <input type="email" placeholder="Users Email" name="user_name_email" id="user_name_email"/></br></br>
        <input type="password" placeholder="Password" name="password" id="password"/></br></br>
        <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password"/></br></br>

        <input type="type" placeholder="company Name" name="company_name" id="company_name"/></br></br>
        <input type="address" placeholder="Address" name="address" /></br></br>
        <input type="type" placeholder="TIN NO" name="tin_no" /></br></br>
        <input type="type" placeholder="Pan No" name="pan_no" /></br></br>
        <input type="type" placeholder="phone" name="phone" /></br></br>
        <input type="type" placeholder="Excise Registration Number" name="excise_no" /></br></br>
        <input type="type" placeholder=" Services Tax No" name="services_tax_no" /></br></br>
        <input type="type" placeholder="Tan No" name="tan_no" /></br></br>


        <?php echo form_hidden('todo', 'register'); ?>

        <button>Register</button>
        </form>
    </div>
<?php echo form_open('banks_details'); ?>
<h5>Bank Detils</h5>
<input type="type" placeholder="Bank Name" name="bank_name" /></br></br>
<input type="type" placeholder="Ifsc Code" name="ifsc_code" /></br></br>
<input type="type" placeholder="A/c No" name="ac_no" /></br></br>
<button>Add Bank</button>
<?php echo form_close(); ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="<?php echo asset_url();?>js/index.js"></script>
</body>
</html>

