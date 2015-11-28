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

 <div class="padding-15">


 <div class="login-box">


<h1>Payment Details</h1>

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
                              Phone No.:  <?php echo $seller[0]['chawri_sellers_phone']; ?>
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

                                <?php
                                $qnt = $order[0]['chawri_products_orders_products_quantity_on_offer'];
                                $rate = $order[0]['chawri_products_orders_products_rate'];
                                $bal = ($qnt*$rate)+(($qnt*$rate*3)/100);
                                echo $bal;
                                 ?>
                                 <br/>
                                 <br/>
                                 <button title="Place" class="button" onclick="location.href='<?php echo base_url().'products/placeOrder/'.$seller[0]['chawri_sellers_id'];?>';">Place Order </button>
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







<!-- PAGE LEVEL SCRIPTS -->
