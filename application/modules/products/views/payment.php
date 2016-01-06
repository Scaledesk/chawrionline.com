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

<script type="text/javascript">
  
  

</script>


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
            <span>Tin No. <?php echo $buyNow['tin_no']?></span>
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
                      <td class="text-center"><strong>Rate</strong></td>
                      <td class="text-center"><strong>Quantity</strong></td>
                      <td class="text-center"><strong>Weight</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                 
                  <tr>
                    <td><?php echo $order[0]['chawri_products_name'];?></td>
                    <td class="text-center">&#8377;<?php echo $order[0]['chawri_products_rate'];?></td>
                    <td class="text-center"><?php echo $buyNow['qty']?></td>
                     <td class="text-center"><?php echo $order[0]['chawri_products_weight']?></td>

                    <td class="text-right"><?php 
                               $weight = $order[0]['chawri_products_weight'];
                                $qnt = $buyNow['qty'];
                                $rate = $order[0]['chawri_products_rate'];
                                $totalweight=$weight*$qnt;
                               /* echo $totalweight;*/


                               
                                $total;
                                $subtotal;
                                $totalall;
                               /* echo $buyNow['cform'];
                                die; */
                                  if($buyNow['cform']=='CFORM'){

                                     $totalall=($qnt*$weight*$rate) + (($qnt*$weight*$rate*2.00)/100);
                                     $subtotal= ($qnt*$weight*$rate*2.00)/100;
                                      
                                     $total_amount=moneyFormatIndia($qnt*$weight*$rate);
                                     echo $total_amount;
                                  }
                                 else {
                                   $totalall=($qnt*$weight*$rate) + (($qnt*$weight*$rate*5.00)/100);
                                   $subtotal= ($qnt*$weight*$rate*5.00)/100;
                                   
                                    $total_amount=moneyFormatIndia($qnt*$weight*$rate);
                                    echo $total_amount;
                                 }
                                  

                                
                                   ?>
                          </td>
                  </tr>
                                
                                
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"  ><strong><span data-toggle="tooltip" title="5% Vat">tax</span></strong></td>
                    <td class="thick-line text-right"><?php echo moneyFormatIndia($subtotal);?></td>
                  </tr>
                   <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center" ><strong> <span data-toggle="tooltip" title="0.25% as per our Policy">Commision</span></strong></td>
                    <td class="no-line text-right"><?php  $commission = $qnt*$weight*$rate*.0025 ; 
                          echo moneyFormatIndia($commission);
                    ?></td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center" ><strong> Shipping</strong></td>
                    <td class="no-line text-right"><?php /*echo $shiping;*/
                       
                                 $shiping=$buyNow['totalshiping'];
                                echo moneyFormatIndia($shiping); ?>
                     </td> 
                  </tr>
                                      <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong> <span data-toggle="tooltip" title="14% of Commission">S.T on commission</span></strong></td>
                    <td class="no-line text-right"><?php  $stc = $commission*.14;  
                                                      echo moneyFormatIndia($stc);  ?></td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right"><?php 

                               if($buyNow['totalshiping']==0){
                                 $shiping1=1;
                               }else{
                                 $shiping1=$buyNow['totalshiping'];
                               }
                   $total=$totalall+$shiping1+$commission+$stc;
                  echo moneyFormatIndia($total); 
                   
                   /* $;*/

                     ?></td>
                  </tr>
                  <tr><td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line"></td><td class="no-line"></td>
                    <td style="text-transform: uppercase;" class="no-line text-right">
                      <?php echo convert_number_to_words(round($total,'0')).'  Rupees Only.'; ?>
                    </td>
                  </tr>
                </tbody>

              </table>
          
               <form action="<?php echo base_url().'products/placeOrder/'; ?>" method="post">
                 
                 <input type="hidden" name="total_cost" value="<?php echo $total; ?>" />
                 <input type="hidden" name="weight" value="<?php echo $weight; ?>" />
                 <input type="hidden" name="sellers_id" value="<?php echo $seller[0]['chawri_sellers_id']; ?>" />
                 <input type="hidden" name="products_id" value="<?php echo $order[0]['chawri_products_id']?>">
                 <input type="hidden" name="description" value="<?php echo $buyNow['description']; ?>" />
                 <input type="hidden" name="qry" value="<?php echo $buyNow['qty']; ?>"/>
                 <input type="hidden" name="cform" value="<?php echo $buyNow['cform']; ?>" />
                 <input type="hidden" name="tin_no" value="<?php echo $buyNow['tin_no']; ?>" />
                  <input type="hidden" name="commission" value="<?php echo $commission; ?>" />
                  <input type="hidden" name="stc" value="<?php echo $stc; ?>" />
                  <input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>" />
                  <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>" />
                  <input type="hidden" name="shiping" value="<?php echo $shiping; ?>" />
                 <input type="hidden" name="products_name" value="<?php echo $order[0]['chawri_products_name']; ?>" />
                 <input type="hidden" name="rate" value="<?php echo $order[0]['chawri_products_rate']; ?>" />
                 <button type="submit" title="Place" class="button">Place Order </button>
               </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
                                <!-- Invoice Close -->