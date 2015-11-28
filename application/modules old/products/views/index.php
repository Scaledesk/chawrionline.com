<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */

?>


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
    <h2>Products Details</h2>

    <?php echo form_open('products'); ?>

    <input type="type" placeholder="Products Name" name="products_name" /></br></br>
    <input type="type" placeholder="Products Brand Name" name="products_brand_name" /></br></br>
    <input type="type" placeholder="Products CENVAT Amount" name="products_cenvat_amount" /></br></br>
    <input type="type" placeholder=" Sheets per Packet " name="products_sheets_per_packet" /></br></br>
    <input type="type" placeholder="Products Rate" name="products_rate" /></br></br>
    <input type="type" placeholder=" Products Size" name="products_size" /></br></br>
    <input type="type" placeholder="Substance" name="products_substance" /></br></br>
    <input type="type" placeholder="Manufacturer" name="products_manufacturer" /></br></br>
    <input type="type" placeholder="Grain" name="products_grain" /></br></br>
    <input type="type" placeholder="Products Packing" name="products_packing" /></br></br>
    <input type="type" placeholder="Products Per Bundle" name="packets_per_bundle" /></br></br>
    <input type="type" placeholder=" Quantity on Offer (in pkts)" name="products_quantity_on_offer" /></br></br>
    <input type="type" placeholder="Thickness" name="products_thickness" /></br></br>

<!--
    products_brand_name products_name products_cenvat_amount products_sheets_per_packet products_size products_substance
    products_manufacturer products_grain packets_per_bundle products_packing products_quantity_on_offer products_thickness

-->
    <button>Submit</button>
    </form>
</div>

<?php echo form_open_multipart('products/productsXml'); ?>
<input type="file" name="xml">
<input type="submit" name="submit">
<?php echo form_close(); ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="<?php echo asset_url();?>js/index.js"></script>
</body>
</html>
