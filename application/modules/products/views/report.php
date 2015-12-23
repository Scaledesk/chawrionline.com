<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/16/2015
 * Time: 2:30 PM
 */

?>






     
          <h2>ChawriOnline.com - Performa Invoice</h2> 
          <h3 class="pull-right">Order # <?php echo $products_id; ?></h3>
        
            
            <hr/>
            
        
       
            <strong>Billed To:</strong><br>
             <?php echo $this->session->userdata['user_data'][0]['users_name']; ?><br>
              <?php echo $this->session->userdata['user_data'][0]['users_address']; ?><br>
           
              <strong>Shipped To:</strong><br>
               <?php /*echo $seller[0]['chawri_sellers_company_name'];*/ ?>

           
              <strong>Payment Method:</strong><br>
              Please Uploade Bank Reciept (within 24 Hrs.)
           
              <strong>Order Date:</strong><br>
               <?php echo date('m/d/Y h:i:s a', time());?><br>
            

            <strong>Order summary</strong></h3>
          
              <table>
                <thead>
                                <tr>
                      <td style="Padding:20px;"><strong>Item</strong></td>
                      <td style="Padding:20px;"><strong>Price</strong></td>
                      <td style="Padding:20px;"><strong>Quantity</strong></td>
                      <td style="Padding:20px;"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td><?php echo $products_name;?></td>
                    <td style="Padding:20px;">&#8377;<?php echo $rate;?></td>
                    <td style="Padding:20px;"><?php echo $qry; ?></td>
                    <td style="Padding:20px;"> <?php echo $total_amount; ?></td>
                  </tr>
                                
                                
                  <tr>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"><strong>tax</strong></td>
                    <td style="Padding:20px;"><?php echo moneyFormatIndia($subtotal);?></td>
                  </tr>
                   <tr>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"><strong>Commision</strong></td>
                    <td style="Padding:20px;"><?php 
                          echo moneyFormatIndia($commission);
                    ?></td>
                  </tr>
                  <tr>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"><strong>Shipping</strong></td>
                    <td style="Padding:20px;"><?php /*echo $shiping;*/
                        echo moneyFormatIndia($shiping); ?>
                     </td> 
                  </tr>
                                      <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"><strong>S.T on commission</strong></td>
                    <td style="Padding:20px;"><?php   
                                                      echo moneyFormatIndia($stc);  ?></td>
                  </tr>
                  <tr>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"></td>
                    <td style="Padding:20px;"><strong>Total</strong></td>
                    <td style="Padding:20px; border-top:1px solid  #000;border-bottom: 3px solid #000;"><?php 
                  
                  echo moneyFormatIndia($total_cost); 
                   
                   /* $;*/

                     ?></td>
                  </tr>
                </tbody>

              </table>
              <hr/>
         * Terms and Conditions  Apply.
              <hr/>
          
           