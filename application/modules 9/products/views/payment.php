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







<!-- PAGE LEVEL SCRIPTS -->