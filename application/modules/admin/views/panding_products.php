<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
  <script>
  $(document).ready(function() {
    $('.display').DataTable();
} );
  </script>


  
  <div class="container">
  <h2>Manage Order</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Pending</a></li>
    <li><a data-toggle="tab" href="#menu1">Approved</a></li>
    <li><a data-toggle="tab" href="#menu2">Cancelled</a></li>
    <li><a data-toggle="tab" href="#menu3">Cancelled By Buyer</a></li>
    <li><a data-toggle="tab" href="#menu4">Completed</a></li>
    <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr>
                   <th>Status</th>
                    <th>Delivery Date</th>
                    <th>Action</th>
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                   


                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                       foreach($panding_products as $rows){
                       ?>
                      <tr>
                        <td>
                      <?php echo $rows['chawri_products_orders_status']; ?>
                    </td>
                     <form action="<?php  echo base_url().'admin/approval/'.$rows['chawri_products_orders_id'];?>" method="post">
                    <td>
                     <input type="date" required name="delivery_date"/>
                        
                      <input type="hidden" value="<?php echo $rows['chawri_users_username']; ?>" name="buyer_email">
                    </td>
                    <td>
                        <button type="submit" onclick="return confirm('Are you sure you want to Approve Products?')" >Approve</button> / <a onclick="return confirm('Are you sure you want to Decline Products?')" href="<?php  echo base_url().'admin/decline/'.$rows['chawri_products_orders_id'];?>">Decline</a>  
                  
                      
                    </td>
                    </form>
                    <td>
                      <?php echo $rows['chawri_products_name']; ?> 
                    </td>
                    <td>
                      <?php echo $rows['chawri_users_fname'].' '.$rows['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows['chawri_products_orders_date']; ?>
                    </td>
                     <td>
                    <?php if ($rows['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        
                       
                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>

    <div id="menu1" class="tab-pane fade">
     <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr>
                 
                          <th>Status</th>
                    <th>Delivery Date</th>
                   
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                       
                                      foreach($approve as $rows1){
                       ?>
                      <tr>
                     
                           <td>
                      <?php echo $rows1['chawri_products_orders_status']; ?>
                    </td>
                       
                    <td>
                        <?php echo  nice_date($rows1['chawri_products_order_delivery_date'], 'Y-m-d'); ?> 
                    </td>
                    </form>
                    <td>
                      <?php echo $rows1['chawri_products_name']; ?> 
                    </td>
                    <td>
                      <?php echo $rows1['chawri_users_fname'].' '.$rows1['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows1['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows1['chawri_products_orders_date']; ?>
                    </td>
                     <td>
                    <?php if ($rows1['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows1['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows1['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        
                      
                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
      </div>

    <div id="menu2" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                
                          <th>Status</th>
                    <th>Delivery Date</th>
                   
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                  </tr>
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($cancel as $rows2){
                       ?>
                      <tr>
                      
                        
                          <td>
                      <?php echo $rows2['chawri_products_orders_status']; ?>
                    </td>
                       
                    <td>
                        <?php echo  nice_date($rows2['chawri_products_order_delivery_date'], 'Y-m-d'); ?> 
                    </td>
                    </form>
                    <td>
                      <?php echo $rows2['chawri_products_name']; ?> 
                    </td>
                    <td>
                      <?php echo $rows2['chawri_users_fname'].' '.$rows2['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows2['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows2['chawri_products_orders_date']; ?>
                    </td>
                     <td>
                    <?php if ($rows2['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows2['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows2['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
    <div id="menu3" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                
                          <th>Status</th>
                    <th>Delivery Date</th>
                   
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                  </tr>
                       
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($cancel_buyer as $rows3){
                       ?>
                      <tr>
                     
                        
                          <td>
                      <?php echo $rows3['chawri_products_orders_status']; ?>
                    </td>
                       
                    <td>
                        <?php echo  nice_date($rows3['chawri_products_order_delivery_date'], 'Y-m-d'); ?> 
                    </td>
                    </form>
                    <td>
                      <?php echo $rows3['chawri_products_name']; ?> 
                    </td>
                    <td>
                      <?php echo $rows3['chawri_users_fname'].' '.$rows3['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows3['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows3['chawri_products_orders_date']; ?>
                    </td>
                     <td>
                    <?php if ($rows3['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows3['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows3['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
     <div id="menu4" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
               
                         <th>Status</th>
                    <th>Delivery Date</th>
                   
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                       
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($complete as $rows4){
                       ?>
                      <tr>
                      
                          <td>
                      <?php echo $rows4['chawri_products_orders_status']; ?>
                    </td>
                       
                    <td>
                        <?php echo  nice_date($rows4['chawri_products_order_delivery_date'], 'Y-m-d'); ?> 
                    </td>
                    </form>
                    <td>
                      <?php echo $rows4['chawri_products_name']; ?> 
                    </td>
                    <td>
                      <?php echo $rows4['chawri_users_fname'].' '.$rows4['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows4['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows4['chawri_products_orders_date']; ?>
                    </td>
                     <td>
                    <?php if ($rows4['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows4['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows4['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
  </div>
</div>

<!-- ........tab......... -->
   