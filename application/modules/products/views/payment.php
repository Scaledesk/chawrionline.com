<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/16/2015
 * Time: 2:30 PM
 */?>


<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

 <!-- 
<div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>

 <div class="em-main-container em-col1-layout">

<div class="em-col-main col-md-24 col-sm-24">


<div class="page-title"> <h1>Order Details</h1> </div>

<hr>

<div class="container">
<div class="em-col-main col-sm-20">
    <div class="account-create">
            <div class="fieldset">
                <ul class="form-list">

                    <li class="fields">
                          <div class="customer-name-middlename">
                              <div class="field name-firstname">
                                  <label for="products_brand_name" class="required"> <b> Order ID </b> </label>
                              </div>
                          </div>
                          <div class="customer-name-middlename">
                              <div class="field name-firstname">
                                  <div class="input-box">
                                      <?php echo $order[0]['chawri_products_orders_id']; ?>
                                  </div>
                              </div>
                          </div>
                    </li>

                    <li class="fields">
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <label for="products_brand_name" class="required"> <b> Order Date </b> </label>
                          </div>
                      </div>
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <div class="input-box">
                                  <?php echo $order[0]['chawri_products_orders_date']; ?>
                              </div>
                          </div>
                      </div>
                    </li>

                    <li class="fields">
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <label for="products_brand_name" class="required"> <b> Product Name </b> </label>
                          </div>
                      </div>
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <div class="input-box">
                                  <?php echo $order[0]['chawri_products_orders_products_name']; ?>
                              </div>
                          </div>
                      </div>
                    </li>

                    <li class="fields">
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <label for="products_brand_name" class="required"> <b> Seller Name </b> </label>
                          </div>
                      </div>
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <div class="input-box">
                                  <?php echo $seller[0]['chawri_sellers_company_name']; ?>
                              </div>
                          </div>
                      </div>
                    </li>

                    <li class="fields">
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <label for="products_brand_name" class="required"> <b> Seller Contact Details </b> </label>
                          </div>
                      </div>
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <div class="input-box">
                                Email: <?php echo $seller[0]['chawri_sellers_email']; ?>,<br/> 
                              Phone No.:  <?php echo $seller[0]['chawri_sellers_phone']; ?> ,</br>
                              </div>
                          </div>
                      </div>
                    </li>

                    <li class="fields">
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <label for="products_brand_name" class="required"> <b> Amount to be Paid </b> </label>
                          </div>
                      </div>
                      <div class="customer-name-middlename">
                          <div class="field name-firstname">
                              <div class="input-box">

                               &#8377; <?php
                                $weight = $order[0]['chawri_products_orders_products_weight'];
                                $qnt = $order[0]['chawri_products_orders_products_quantity_on_offer'];
                                $rate = $order[0]['chawri_products_orders_products_rate'];

                                  
                                  if($cform=='Cform'){

                                     $total=($qnt*$weight*$rate) + (($qnt*$weight*$rate*2.00)/100);
                                     echo  $total;
                                  }
                                 else {
                                   $total=($qnt*$weight*$rate) + (($qnt*$weight*$rate*5.00)/100);
                                   echo  $total;
                                  }
                                 
                                
                                
                              
                                 ?>
                                 <br/>
                                 <br/>
                                 <button title="Place" class="button" onclick="location.href='<?php echo base_url().'products/placeOrder/'.$seller[0]['chawri_sellers_id'].'/'.$order[0]['chawri_products_orders_products_id'].'/'.$qnt.'/'.$total;?>';">Place Order </button>
                              </div>
                          </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



</div>

 </div>
 
</div>

</div>
 -->






<!-- PAGE LEVEL SCRIPTS -->



<!-- Invoice -->
                                <div class="container">
    <div class="row">
       <!--  <div class="em-logo col-sm-6"><a href="#" title="Chawri Oline" class="logo"><strong> ChawriOnline</strong><img class="retina-img" src="<?php echo base_url();?>assets/images/chawrionline%20logo1.jpg" alt="Chawri Oline"></a>
           </div> -->
        <div class="invoice-title">
          <h2>ChawriOnline.com - Performa Invoice</h2> 
                <h3 class="pull-right">Order # <?php echo $order[0]['chawri_products_id']; ?></h3>
        </div>
        <div class="col-xs-24">
 
            
            
            
        
        <hr>
        <div class="row">
          <div class="col-xs-12">
            <address>
            <strong>Billed To:</strong><br>
             <?php echo $this->session->userdata['user_data'][0]['users_name']; ?><br>
              <?php echo $this->session->userdata['user_data'][0]['users_address']; ?>
            </address>
          </div>
          <div class="col-xs-12 text-right">
            <address>
              <strong>Shipped To:</strong><br>
               <?php /*echo $seller[0]['chawri_sellers_company_name'];*/ ?>

            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <address>
              <strong>Payment Method:</strong><br>
              Please Uploade Bank Reciept (within 24 Hrs.)
            </address>
          </div>
          <div class="col-xs-12 text-right">
            <address>
              <strong>Order Date:</strong><br>
               <?php echo date('m/d/Y h:i:s a', time());?><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-24">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Item</strong></td>
                      <td class="text-center"><strong>Price</strong></td>
                      <td class="text-center"><strong>Quantity</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                 
                  <tr>
                    <td><?php echo $order[0]['chawri_products_name'];?></td>
                    <td class="text-center">&#8377;<?php echo $order[0]['chawri_products_rate'];?></td>
                    <td class="text-center"><?php echo $buyNow['qty']?></td>
                    <td class="text-right">&#8377;<?php 
                               $weight = $order[0]['chawri_products_weight'];
                                $qnt = $buyNow['qty'];
                                $rate = $order[0]['chawri_products_rate'];
                                $totalweight=$weight*$qnt;
                               /* echo $totalweight;*/
                                $shiping;
                                $total;
                                $subtotoal;
                                $totalall; 
                                  if($buyNow['cform']=='Cform'){

                                     $totalall=($qnt*$weight*$rate) + (($qnt*$weight*$rate*2.00)/100);
                                    $subtotoal= ($qnt*$weight*$rate*2.00)/100;
                                     echo  $qnt*$weight*$rate;

                                  }
                                 else {
                                   $totalall=($qnt*$weight*$rate) + (($qnt*$weight*$rate*5.00)/100);
                                   $subtotoal= ($qnt*$weight*$rate*5.00)/100;
                                   echo  $qnt*$weight*$rate;
                                 }
                                  

                                  if($seller[0]['chawri_sellers_state']=='Delhi' && $this->session->userdata['user_data'][0]['users_state']=='Delhi'){
                                    
                                                  if ($totalweight<=1000) {

                                                      $shiping=1000;
                                                    
                                                  } 
                                                  elseif ($totalweight>1000 && $totalweight<=2000 ) {
                                                    $shiping=2000;
                                                   } elseif($totalweight>2000 && $totalweight<=3000) {
                                                    $shiping=3000;
                                                   }
                                                    elseif($totalweight>3000 && $totalweight<=4000){
                                                    $shiping=4000;
                                                  }
                                                  elseif($totalweight>4000 ){
                                                    $shiping=$totalweight*1;
                                                  }
                                                  }


                                        else{
                                                  if ($totalweight<=1000) {

                                                      $shiping=2000;
                                                    
                                                  } 
                                                  elseif ($totalweight>1000 && $totalweight<=2000 ) {
                                                    $shiping=3000;
                                                   } elseif($totalweight>2000 && $totalweight<=3000) {
                                                    $shiping=4000;
                                                   }
                                                    elseif($totalweight>3000 && $totalweight<=4000){
                                                    $shiping=5000;
                                                  }
                                                  elseif($totalweight>4000 ){
                                                    $shiping=$totalweight*1;
                                                  }
                                     }


                                   ?>
                          </td>
                  </tr>
                                
                                
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>tax</strong></td>
                    <td class="thick-line text-right">&#8377;<?php echo $subtotoal;?></td>
                  </tr>
                   <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Commision</strong></td>
                    <td class="no-line text-right">&#8377;<?php echo $commission = $qnt*$weight*$rate*.0025; ?></td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Shipping</strong></td>
                    <td class="no-line text-right">&#8377;<?php echo $shiping; ?></td>
                  </tr>
                                      <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>S.T on commission</strong></td>
                    <td class="no-line text-right">&#8377;<?php echo $stc = $commission*.14; ?></td>
                  </tr
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">&#8377;<?php 
                   $total=$totalall+$shiping+$commission+$stc;
                  
                     setlocale(LC_MONETARY, 'en_IN');
                      $total = formatMoney('%!i', $total);
                     echo $total;

                     ?></td>
                  </tr>
                </tbody>

              </table>
          
               <form action="<?php echo base_url().'products/placeOrder/'; ?>" method="post">
                 
                 <input type="hidden" name="total_cost" value="<?php echo $total; ?>" />
                 
                 <input type="hidden" name="sellers_id" value="<?php echo $seller[0]['chawri_sellers_id']; ?>" />
                 <input type="hidden" name="products_id" value="<?php echo $order[0]['chawri_products_id']?>">
                 <input type="hidden" name="description" value="<?php echo $buyNow['description']; ?>" />
                 <input type="hidden" name="qry" value="<?php echo $buyNow['qty']; ?>"/>
                 <input type="hidden" name="cform" value="<?php echo $buyNow['cform']; ?>" />
                 
                 <input type="hidden" name="tin_no" value="<?php echo $buyNow['tin_no']; ?>" />
                 <button type="submit" title="Place" class="button">Place Order </button>
               </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
                                <!-- Invoice Close -->